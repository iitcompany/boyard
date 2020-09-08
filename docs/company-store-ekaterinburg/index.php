<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Фирменный магазин г. Екатеринбург");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/company-store-ekaterinburg/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/company-store-ekaterinburg/",
		"STORAGE_ID" => "187",
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
		