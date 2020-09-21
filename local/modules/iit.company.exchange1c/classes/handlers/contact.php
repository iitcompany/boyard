<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Exchange1C\Handlers;

use IITCompany\Exchange1C\Service\HL;

class Contact
{
    public static $ENTITY_TYPE = 'CONTACT';
    public static $ENTITY_ID = '';

    public static function onAfterCrmContactAdd(&$arFields)
    {
        $arEntity = \CCrmContact::GetList([], ['ID' => $arFields['ID'], 'CHECK_PERMISSIONS' => 'N'])->Fetch();
        self::$ENTITY_ID = $arFields['ID'];
        unset($arEntity['ID']);

        $hl = new HL();
        $hl->add(self::$ENTITY_TYPE, self::$ENTITY_ID, 'ADD', self::clearFields($arFields));
    }

    public static function onAfterCrmContactUpdate(&$arFields)
    {
        $arEntity = \CCrmContact::GetList([], ['ID' => $arFields['ID'], 'CHECK_PERMISSIONS' => 'N'])->Fetch();
        self::$ENTITY_ID = $arFields['ID'];
        unset($arEntity['ID']);

        $hl = new HL();
        $hl->add(self::$ENTITY_TYPE, self::$ENTITY_ID, 'UPDATE', self::clearFields($arEntity));
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
