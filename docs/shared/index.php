<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Общие документы");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/shared/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/docs/shared/",
        "STORAGE_ID" => "159",
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>