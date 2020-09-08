<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

use Bitrix\Main\Page\Asset,
    Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();
$eventManager->addEventHandler(
    'crm',
    'OnBeforeCrmCompanyUpdate',
    array('IITCompany\\Handler\\Company', 'OnBeforeCrmCompanyUpdate')
);