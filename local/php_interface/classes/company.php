<?
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Handler;

class Company
{
    function OnBeforeCrmCompanyUpdate(&$arFields)
    {

        if (!isset($arFields['CHECK_COMPANY']))
        {
            $arCompany = \CCrmCompany::GetList([], ['ID' => $arFields['ID'], false, false, ['ID', 'UF_CHILDS_COMPANY', 'UF_PARENT_COMPANY']])->Fetch();

            $company = new \CCrmCompany(false);

            //Если обновляются дочерние компании
            if (isset($arFields['UF_CHILDS_COMPANY']))
            {
                if (empty($arFields['UF_CHILDS_COMPANY']) && $arCompany['UF_CHILDS_COMPANY'])
                {
                    foreach ($arCompany['UF_CHILDS_COMPANY'] as $childCompanyID)
                    {
                        $arChildCompanyFields = [
                            'UF_PARENT_COMPANY' => '',
                            'CHECK_COMPANY' => true
                        ];
                        $company->Update($childCompanyID, $arChildCompanyFields);
                    }
                }
                foreach ($arFields['UF_CHILDS_COMPANY'] as $childCompanyID)
                {
                    $arChildCompanyFields = [
                        'UF_PARENT_COMPANY' => $arFields['ID'],
                        'CHECK_COMPANY' => true
                    ];
                    $company->Update($childCompanyID, $arChildCompanyFields);
                }
            }

            //Если обновляется родительская категория
            if (isset($arFields['UF_PARENT_COMPANY']))
            {
                if (empty($arFields['UF_PARENT_COMPANY']))
                {

                    if ($arCompany['UF_PARENT_COMPANY']) {

                        $arParentCompany = \CCrmCompany::GetList([], ['ID' => $arCompany['UF_PARENT_COMPANY'], false, false, ['ID', 'UF_CHILDS_COMPANY', 'UF_PARENT_COMPANY']])->Fetch();

                        if ($arParentCompany['UF_CHILDS_COMPANY'])
                        {
                            foreach ($arParentCompany['UF_CHILDS_COMPANY'] as $childCompanyID)
                            {
                                $arChildCompanyFields = [
                                    'UF_PARENT_COMPANY' => '',
                                    'CHECK_COMPANY' => true
                                ];
                                $company->Update($childCompanyID, $arChildCompanyFields);
                            }
                        }
                    }
                }
                else
                {

                    $arParentCompany = \CCrmCompany::GetList([], ['ID' => $arFields['UF_PARENT_COMPANY'], false, false, ['ID', 'UF_CHILDS_COMPANY', 'UF_PARENT_COMPANY']])->Fetch();
                    $arChildCompanyFields = [];

                    if ($arParentCompany['UF_CHILDS_COMPANY'])
                    {
                        $arChildCompanyFields['UF_CHILDS_COMPANY'] = $arParentCompany['UF_CHILDS_COMPANY'];
                    }
                    $arChildCompanyFields['UF_CHILDS_COMPANY'][] = $arFields['ID'];

                    $arChildCompanyFields['CHECK_COMPANY'] = true;

                    $res = $company->Update($arParentCompany['ID'], $arChildCompanyFields);

                    if ($arFields['UF_PARENT_COMPANY'] != $arCompany['UF_PARENT_COMPANY'])
                    {
                        $arParentCompanyOld = \CCrmCompany::GetList([], ['ID' => $arCompany['UF_PARENT_COMPANY'], false, false, ['ID', 'UF_CHILDS_COMPANY', 'UF_PARENT_COMPANY']])->Fetch();

                        $arParentCompanyOldFields = [];
                        foreach ($arParentCompanyOld['UF_CHILDS_COMPANY'] as $k => $vl)
                        {
                            if ($vl != $arFields['ID'])
                            {
                                $arParentCompanyOldFields['UF_CHILDS_COMPANY'][$k] = $vl;
                            }
                        }
                        $arParentCompanyOldFields['CHECK_COMPANY'] = true;

                        $company->Update($arCompany['UF_PARENT_COMPANY'], $arParentCompanyOldFields);
                    }
                }
            }
        }
    }
}