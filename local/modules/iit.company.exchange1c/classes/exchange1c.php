<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */
namespace IITCompany;

use IITCompany\Exchange1C\FileTools;
use IITCompany\Exchange1C\Queue;

class Exchange1C
{
    protected $arRequest = [];
    protected $entity;
    protected $entityType;
    protected $entityAction;
    protected $typeImport = false;
    protected $propPrefix = 'F_';
    protected $arRequiredFields = ['action', 'login', 'pass'];

    public $LAST_ERROR = false;

    public function __construct($arRequest = [])
    {
        if ($this->validateRequestFields($arRequest))
        {
            if ($this->authorizeUser($arRequest['login'], $arRequest['pass']))
            {
                $this->arRequest = $arRequest;

                if (isset($this->arRequest['type_import']) && $this->arRequest['type_import'] == 'full') {
                    $this->typeImport = true;
                }
                $this->entityType = explode('.', $arRequest['action'])[1];
                $this->entityAction = end(explode('.', $arRequest['action']));
            }
        }
    }

    public function init()
    {
        switch ($this->arRequest['action'])
        {
            //Получение изменений из 1С
            case 'crm.deal.update':
            case 'crm.deal.add':
            case 'crm.contact.update':
            case 'crm.company.update':
            case 'crm.company.add':
                $arEntityFields = $this->loadEntityFields();
                if ($arEntityFields) {
                    $this->processEntityB24($arEntityFields);
                } else {
                    $this->LAST_ERROR = 'Ошибка, нет полей для обновления/добавления';
                }
                break;

            //Отправка изменений из Б24
            case 'crm.deal.get':
            case 'crm.company.get':
            case 'crm.contact.get':
                $ft = new FileTools($this->entityType, $this->arRequest['type']);
                $ft->createExportFile(Queue::getWaitRecordList($this->entityType, $this->typeImport));
                $ft->forceDownloadExportFile();
                break;
            default:
                $this->LAST_ERROR = 'Ошибка, не известный тип поля action';
        }

        if ($this->LAST_ERROR) {
            echo $this->LAST_ERROR;
            die();
        }

        return true;
    }

    public function processEntityB24($arEntityFields)
    {
        switch ($this->entityType) {
            case 'deal':
                $entity = new \CCrmDeal(false);
                break;
            case 'company':
                $entity = new \CCrmCompany(false);
                break;
            case 'contact':
                $entity = new \CCrmContact(false);
                break;
        }

        if (isset($entity)) {
            switch ($this->entityAction) {
                case 'add':
                    $res = $entity->Add($arEntityFields);
                    break;
                case 'update':
                    $entityId = $arEntityFields['ID'];
                    unset($arEntityFields['ID']);
                    $res = $entity->Update($entityId, $arEntityFields);
                    break;
            }

            if (isset($res) && $res)
            {
                return true;
            }
            else
            {
                $this->LAST_ERROR = $entity->LAST_ERROR;
                return false;
            }
        }
        else
        {
            $this->LAST_ERROR = 'Ошибка, не известный тип сущности';
            return false;
        }
    }


    public function loadEntityFields()
    {
        $arEntityFields = [];
        foreach ($this->arRequest as $CODE => $VALUE) {
            if (strpos($CODE, $this->propPrefix) !== false) {
                $arEntityFields[str_replace($this->propPrefix, '', $CODE)] = $VALUE;
            }
        }
        if (!isset($arEntityFields['ID']) || empty($arEntityFields['ID'])) {
            $this->LAST_ERROR = 'Ошибка, не указано поле ID сущности!';
            return false;
        }
        if (count($arEntityFields) == 1 && isset($arEntityFields['ID'])) {
            $this->LAST_ERROR = 'Ошибка, нет полей для обновления!';
            return false;
        }
        return $arEntityFields;
    }

    public function validateRequestFields($arRequest = [])
    {
        $arError = [];

        if (empty($arRequest)) {
            $this->LAST_ERROR = 'Ошибка, пустой запрос';
            return false;
        }

        foreach ($this->arRequiredFields as $code) {
            if (!isset($arRequest[$code]) || empty($arRequest[$code])) {
                $arError[] = $code;
            }
        }

        if (!empty($arError)) {
            $this->LAST_ERROR = 'Ошибка, в запросе обязательны следюущие поля: '.implode(', ', $arError);
            return false;
        }
        return true;
    }

    public function authorizeUser($login = '', $pass = '')
    {
        if (empty($login) || empty($pass)) {
            return false;
        }

        $arUser = \CUser::GetList($by = '', $order = '', [
            'LOGIN' => $login
        ], [])->Fetch();

        if ($arUser['ID']) {
            $salt = substr($arUser['PASSWORD'], 0, (strlen($arUser['PASSWORD']) - 32));
            $realPassword = substr($arUser['PASSWORD'], -32);
            $password = md5($salt.$pass);

            if ($realPassword == $password)
            {
                global $USER;
                $USER->Authorize($arUser['ID']);
                return true;
            }
            else
            {
                $this->LAST_ERROR = 'Ошибка, неверный логин или пароль!';
                return false;
            }
        }
        $this->LAST_ERROR = 'Ошибка, неверный логин или пароль!';
        return false;
    }
}