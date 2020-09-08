<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Документы для дилеров");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/extranet/documents-the-extranet/documents-for-the-dealers/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/extranet/documents-the-extranet/documents-for-the-dealers/",
		"STORAGE_ID" => "289",
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
		