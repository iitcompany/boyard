<?
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Handler;

class Company
{
    function OnBeforeCrmCompanyUpdate(&$arFields)
    {
        $arCompany = CCrmCompany::GetList([], ['ID' => $arFields['ID'], false, false, ['ID', 'UF_CHILDS_COMPANY', 'UF_PARENT_COMPANY']])->Fetch();

        //Если обновляются дочерние компании
        if (isset($arFields['UF_CHILDS_COMPANY']))
        {
            $company = new \CCrmCompany(false);

            foreach ($arFields['UF_CHILDS_COMPANY'] as $childCompanyID)
            {
                $arChildCompanyFields = [
                    'UF_PARENT_COMPANY' => $arFields['ID']
                ];
                $company->Update($childCompanyID, $arChildCompanyFields);
            }
        }
        //dump($arFields, true);
    }
}