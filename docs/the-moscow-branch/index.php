<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("филиал г.Москва");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/the-moscow-branch/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/the-moscow-branch/",
		"STORAGE_ID" => "184",
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
		