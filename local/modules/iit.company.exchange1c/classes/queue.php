<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Exchange1C;

use IITCompany\Exchange1C\Service\HL,
    Bitrix\Main\Type\DateTime;

class Queue
{
    const HL_QUEUE_BLOCK_ID = 2;

    public static function getWaitRecordList($entityType = '', $getAllEvents = false)
    {
        if (empty($entityType)) {
            return false;
        }

        $hl = new HL(self::HL_QUEUE_BLOCK_ID);
        $arFilter = [
            'UF_ENTITY_TYPE' => $entityType
        ];
        if ($getAllEvents == false) {
            $arFilter['UF_STATUS'] = 'N';
        }
        $arEntities = [];
        foreach ($hl->getList($arFilter) as $arEntityFields) {
            $arEntities[$arEntityFields['ID']] = json_decode($arEntityFields['UF_FIELDS_UPDATE'], true);
            $arEntities[$arEntityFields['ID']]['ID'] = $arEntityFields['UF_ENTITY_ID'];
            $arEntities[$arEntityFields['ID']]['ENTITY_TYPE'] = $arEntityFields['UF_ENTITY_TYPE'];
            $arEntities[$arEntityFields['ID']]['EVENT_TYPE'] = $arEntityFields['UF_EVENT_TYPE'];

            $hl->update($arEntityFields['ID'], ['UF_STATUS' => 'Y', 'UF_DATE_PULL_EVENTS_1C' => new DateTime()]);
        }
        return $arEntities;
    }
}
