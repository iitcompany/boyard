<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("филиал г.Краснодар");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/the-krasnodar-branch/");
?>
<?$APPLICATION->IncludeComponent("bitrix:disk.common", ".default", Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/the-krasnodar-branch/",
		"STORAGE_ID" => "181",
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
		