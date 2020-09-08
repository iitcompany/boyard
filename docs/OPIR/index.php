<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Отдел планирования и распределения");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/OPIR/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/OPIR/",
		"STORAGE_ID" => "174",
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
		