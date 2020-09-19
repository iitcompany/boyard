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
        unset($arFields['ID']);

        $hl = new HL();
        $hl->add(self::$ENTITY_TYPE, self::$ENTITY_ID, 'ADD', self::clearFields($arFields));
    }

    public static function onAfterCrmCompanyUpdate(&$arFields)
    {
        self::$ENTITY_ID = $arFields['ID'];
        unset($arFields['ID']);

        $hl = new HL();
        $hl->add(self::$ENTITY_TYPE, self::$ENTITY_ID, 'UPDATE', self::clearFields($arFields));
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
