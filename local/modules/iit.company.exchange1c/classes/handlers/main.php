<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Exchange1C\Handlers;

use IITCompany\Exchange1C;

class Main
{
    const URL_EXCHANGE_1C = '/local/tools/exchange/';

    public static function init()
    {
        global $APPLICATION;
        if (strpos($APPLICATION->GetCurPage(), self::URL_EXCHANGE_1C) !== false)
        {
            if (isset($_REQUEST['action']) && $_REQUEST['action'])
            {
                $exchange1C = new Exchange1C($_REQUEST);
                $exchange1C->init();
            }
        }
    }

}
