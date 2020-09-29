<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Exchange1C\Handlers;

use IITCompany\Exchange1C\Service\HL;

class Company
{
    public static $ENTITY_TYPE = 'COMPANY';
    public static $ENTITY_ID = '';

    public static function onAfterCrmCompanyAdd(&$arFields)
    {
        self::$ENTITY_ID = $arFields['ID'];

        $hl = new HL();
        $hl->add(self::$ENTITY_TYPE, self::$ENTITY_ID, 'ADD', self::getEntityByID());
    }

    public static function onAfterCrmCompanyUpdate(&$arFields)
    {
        self::$ENTITY_ID = $arFields['ID'];

        $hl = new HL();
        $hl->add(self::$ENTITY_TYPE, self::$ENTITY_ID, 'UPDATE', self::getEntityByID());
    }

    public static function getEntityByID($ENTITY_ID = false)
    {
        if ($ENTITY_ID) {
            self::$ENTITY_ID = $ENTITY_ID;
        }
        $arEntity = \CCrmCompany::GetList([], ['ID' => self::$ENTITY_ID, 'CHECK_PERMISSIONS' => 'N'])->Fetch();
        $arEntity['PHONE'] = self::getMultiField('PHONE');
        $arEntity['EMAIL'] = self::getMultiField('EMAIL');
        $arEntity['WEB'] = self::getMultiField('WEB');
        $arEntity['REQUISITE'] = self::getRequisite();

        return self::clearFields($arEntity);
    }

    public static function getRequisite()
    {
        $arRequisite = [];

        $rq = new \Bitrix\Crm\EntityRequisite();
        $rsReq = $rq->getList(['filter' => ['ENTITY_ID' => self::$ENTITY_ID]]);
        $arReq = $rsReq->Fetch();
        foreach ($arReq as $CODE => $VALUE)
        {
            if (strpos($CODE, 'RQ_') !== false)
            {
                $arRequisite[$CODE] = $VALUE;
            }
        }

        $arAddress = \Bitrix\Crm\EntityRequisite::getAddresses($arReq['ID']);

        $arRequisite['ACTUAL'] = $arAddress[1] ?: [];
        $arRequisite['LEGAL'] = $arAddress[6] ?: [];

        return $arRequisite;
    }

    public static function getMultiField($typeID)
    {
        $arResult = [];
        $arFilter = [
            'ENTITY_ID'  => self::$ENTITY_TYPE,
            'ELEMENT_ID' => self::$ENTITY_ID,
            'TYPE_ID' => $typeID
        ];
        $rsPhones = \CCrmFieldMulti::GetListEx([],$arFilter,false,[]);
        while ($arPhone = $rsPhones->fetch())
        {
            $arResult[] = $arPhone['VALUE'];
        }
        return $arResult;
    }

    public static function clearFields($arFields)
    {
        $arResult = [];
        foreach ($arFields as $CODE => $arField) {
            if (substr($CODE, 0, 1) == '~') {
                continue;
            }
            $arResult[$CODE] = $arField;
        }
        return $arResult;
    }
}
