<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

use Bitrix\Main\EventManager,
    Bitrix\Main\ModuleManager;

class iit_company_exchange1c extends CModule
{
    var $MODULE_ID = "iit.company.exchange1c";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $PATH;

    function iit_company_exchange1c()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        $this->PATH = $path;
        include($path."/version.php");
        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }
        $this->MODULE_NAME = 'Модуль обмена с 1С';
        $this->MODULE_DESCRIPTION = 'Осуществляет обмен сущностями между Битрикс24 и 1С';
        $this->PARTNER_NAME = 'IIT Company';
        $this->PARTNER_URI = 'https://iit.company';

    }

    function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);

        $this->InstallEvents();
        return true;
    }

    function DoUninstall()
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);

        $this->UnInstallEvents();
        return true;
    }

    function InstallEvents()
    {
        $eventManager = EventManager::getInstance();
        $eventManager->registerEventHandlerCompatible(
            'crm',
            'OnAfterCrmDealAdd',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Deal',
            'onAfterCrmDealAdd' //После создания Сделки
        );
        $eventManager->registerEventHandlerCompatible(
            'crm',
            'OnAfterCrmDealUpdate',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Deal',
            'onAfterCrmDealUpdate' //После обновления Сделки
        );
        $eventManager->registerEventHandlerCompatible(
            'crm',
            'OnAfterCrmContactUpdate',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Contact',
            'onAfterCrmContactUpdate' //После обновления Контакта
        );
        $eventManager->registerEventHandlerCompatible(
            'crm',
            'OnAfterCrmContactAdd',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Contact',
            'onAfterCrmContactUpdate' //После создания Контакта
        );
        $eventManager->registerEventHandlerCompatible(
            'crm',
            'OnAfterCrmCompanyUpdate',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Company',
            'onAfterCrmCompanyUpdate' //После создания Компании
        );
        $eventManager->registerEventHandlerCompatible(
            'crm',
            'OnAfterCrmCompanyAdd',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Company',
            'onAfterCrmCompanyAdd' //После создания Компании
        );
        $eventManager->registerEventHandlerCompatible(
            'main',
            'OnProlog',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Main',
            'init' //При http запросах
        );
        return true;
    }

    function UnInstallEvents() {
        $eventManager = EventManager::getInstance();
        $eventManager->unRegisterEventHandler(
            'crm',
            'OnAfterCrmDealAdd',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Deal',
            'onAfterCrmDealAdd' //После создания Сделки
        );
        $eventManager->unRegisterEventHandler(
            'crm',
            'OnAfterCrmDealUpdate',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Deal',
            'onAfterCrmDealUpdate' //После обновления Сделки
        );
        $eventManager->unRegisterEventHandler(
            'crm',
            'OnAfterCrmContactUpdate',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Contact',
            'onAfterCrmContactUpdate' //После обновления Контакта
        );
        $eventManager->unRegisterEventHandler(
            'crm',
            'OnAfterCrmContactAdd',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Contact',
            'onAfterCrmContactUpdate' //После создания Контакта
        );
        $eventManager->unRegisterEventHandler(
            'crm',
            'OnAfterCrmCompanyUpdate',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Company',
            'onAfterCrmCompanyUpdate' //После создания Компании
        );
        $eventManager->unRegisterEventHandler(
            'crm',
            'OnAfterCrmCompanyAdd',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Company',
            'onAfterCrmCompanyAdd' //После создания Компании
        );
        $eventManager->unRegisterEventHandler(
            'main',
            'OnProlog',
            $this->MODULE_ID,
            '\IITCompany\Exchange1C\Handlers\Main',
            'init' //При http запросах
        );

        return true;
    }
}