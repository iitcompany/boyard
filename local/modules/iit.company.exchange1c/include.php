<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */
use Bitrix\Main\Loader;

Loader::includeModule('crm');
Loader::includeModule('highloadblock');

Loader::registerAutoLoadClasses(
    'iit.company.exchange1c',
    [
        //handlers
        '\IITCompany\Exchange1C\Handlers\Deal'      => 'classes/handlers/deal.php',
        '\IITCompany\Exchange1C\Handlers\Company'   => 'classes/handlers/company.php',
        '\IITCompany\Exchange1C\Handlers\Contact'   => 'classes/handlers/contact.php',
        '\IITCompany\Exchange1C\Handlers\Main'      => 'classes/handlers/main.php',

        //exchange
        '\IITCompany\Exchange1C\Agents'             => 'classes/agents.php',
        '\IITCompany\Exchange1C\Queue'              => 'classes/queue.php',
        '\IITCompany\Exchange1C\FileTools'          => 'classes/filetools.php',
        '\IITCompany\Exchange1C'                    => 'classes/exchange1c.php',

        '\IITCompany\Exchange1C\Service\HL'         => 'classes/service/hl.php',
        '\IITCompany\Exchange1C\Service\Array2XML'  => 'classes/service/array2xml.php',



        //module options
       // 'CModuleOptions' => 'classes/CModuleOptions.php',

        //agents
        //'\IITCompany\Service\Agents'  => 'classes/agents.php',
    ]
);