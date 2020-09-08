<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("филиал Н. Новгород");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/branch-n-novgorod/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/branch-n-novgorod/",
		"STORAGE_ID" => "283",
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
		