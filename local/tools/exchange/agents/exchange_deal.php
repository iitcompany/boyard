<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

function createExchangeFiles()
{
    $arEntityTypes = [
        'DEAL', 'LEAD', 'COMPANY', 'CONTACT'
    ];
    \Bitrix\Main\Loader::includeModule('crm');
    foreach ($arEntityTypes as $entityType) {
        $arEntities = [];

        switch ($entityType) {
            case 'DEAL':
                $rsEntity = CCrmDeal::GetList(['ID' => 'ASC'], [], []);
                break;
            case 'LEAD':
                $rsEntity = CCrmLead::GetList(['ID' => 'ASC'], [], []);
                break;
            case 'COMPANY':
                $rsEntity = CCrmCompany::GetList(['ID' => 'ASC'], [], []);
                break;
            case 'CONTACT':
                $rsEntity = CCrmContact::GetList(['ID' => 'ASC'], [], []);
                break;
        }
        while ($arEntity = $rsEntity->Fetch()) {
            if ($entityType == 'DEAL') {
                $arEntities[$arEntity['ID']]['PRODUCTS'] = CCrmDeal::LoadProductRows($arEntity['ID']);
            }
            if ($entityType == 'LEAD') {
                $arEntities[$arEntity['ID']]['PRODUCTS'] = CCrmLead::LoadProductRows($arEntity['ID']);
            }
            $arEntities[$arEntity['ID']] = $arEntity;
        }

        $xml = new Array2XML();
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/local/tools/exchange/files/json/crm_' . strtolower($entityType) . '_' . date('d-m-Y') . '.json', json_encode($arEntities, JSON_UNESCAPED_UNICODE));
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/local/tools/exchange/files/xml/crm_' . strtolower($entityType) . '_' . date('d-m-Y') . '.xml', $xml->convert($arEntities));
    }

    return 'createExchangeFiles();';
}