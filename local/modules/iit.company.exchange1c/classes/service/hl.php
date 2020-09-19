<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Exchange1C\Service;

use Bitrix\Highloadblock\HighloadBlockTable as HLBT,
    Bitrix\Main\Type\DateTime;

class HL
{
    public $ID = 2;
    public $HlBlock;
    public $entityClass;
    public $entityCompile;

    public function __construct($HL_BLOCK_ID = false)
    {
        if ($HL_BLOCK_ID) {
            $this->ID = $HL_BLOCK_ID;
        }
    }

    public function getList($arFilter = [], $arSelect = ['*'])
    {
        $arItems = [];
        $HlBlockEntityClass = $this->getEntityClass();
        $rsItems = $HlBlockEntityClass::getList([
            'select' => $arSelect,
            'order' => ["ID" => "asc"],
            'filter' => $arFilter
        ]);
        while ($arItem = $rsItems->fetch()) {
            $arItems[$arItem['ID']] = $arItem;
        }
        return $arItems;
    }

    public function add($entityType, $entityId, $eventType, $arUpdateFields)
    {
        $arFields = [
            'UF_STATUS' => 'N',
            'UF_ENTITY_TYPE' => $entityType,
            'UF_ENTITY_ID' => $entityId,
            'UF_FIELDS_UPDATE' => json_encode($arUpdateFields, JSON_UNESCAPED_UNICODE),
            'UF_DATE_PULL_EVENTS_1C' => '',
            'UF_EVENT_TYPE' => $eventType ?: 'UPDATE',
            'UF_DATE_CREATE_EVENT' => new DateTime()
        ];

        return HL::addHlElement($arFields);
    }

    public function update($ID, $arFields)
    {
        return HL::updateHlElement($ID, $arFields);
    }

    public function getEnumListByUserFieldId($USER_FIELD_ID)
    {
        if (!$USER_FIELD_ID) {
            return false;
        }
        $arEnumList = [];
        $rsEnum = \CUserFieldEnum::GetList([], ['USER_FIELD_ID' => $USER_FIELD_ID]);
        while ($arEnum = $rsEnum->GetNext()) {
            $arEnumList[$arEnum['ID']] = $arEnum;
        }
        return $arEnumList;
    }

    public function getFieldTypes()
    {
        return [
            'string' => [
                'CLASS_NAME' => 'CUserTypeString',
                'NAME' => 'Строка',
                'USER_TYPE_ID' => 'enumeration'
            ],
            'list' => [
                'CLASS_NAME' => 'CUserTypeEnum',
                'NAME' => 'Список',
                'USER_TYPE_ID' => 'enumeration'
            ],
            'checkbox' => [
                'USER_TYPE_ID' => 'enumeration',
                'CLASS_NAME' => 'CUserTypeEnum',
                'NAME' => 'Чекбокс'
            ]
        ];
    }

    public function getHlById()
    {
        if ($this->HlBlock) {
            return $this->HlBlock;
        }
        return $this->HlBlock = HLBT::getById($this->ID)->fetch();
    }

    public function getFields()
    {
        global $USER_FIELD_MANAGER;
        $arFields = $USER_FIELD_MANAGER->getUserFieldsWithReadyData(
            'HLBLOCK_' . $this->ID,
            [],
            LANGUAGE_ID
        );
        return $arFields;
    }

    public function getCompileEntity()
    {
        $HlBlock = $this->getHlById();
        return $this->entityCompile = HLBT::compileEntity($HlBlock);
    }

    public function getEntityClass()
    {
        $this->getCompileEntity();
        return $this->entityCompile->getDataClass();
    }

    public function updateHlElement($elID, $arFields)
    {
        $HlBlockEntityClass = $this->getEntityClass();
        return $HlBlockEntityClass::update($elID, $arFields);
    }

    public function addHlElement($arFields)
    {
        $HlBlockEntityClass = $this->getEntityClass();
        return $HlBlockEntityClass::add($arFields);
    }

    public function getItemsCount()
    {
        $HlBlockEntityClass = $this->getEntityClass();
        return $HlBlockEntityClass::getCount();
    }

    public function getListByFilter($filter = [], $limit = [], $offset = [], $order = [])
    {
        $arElements = [];
        $HlBlockEntityClass = $this->getEntityClass();
        $rsElements = $HlBlockEntityClass::getList([
            'filter' => $filter,
            'limit' => $limit,
            'offset' => $offset,
            'order' => $order
        ]);
        while ($arElement = $rsElements->fetch()) {
            $arElements[] = $arElement;
        }
        return $arElements;
    }
}