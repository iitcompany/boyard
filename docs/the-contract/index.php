<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Договоры");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/the-contract/");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:disk.common", 
	".default", 
	array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/the-contract/",
		"STORAGE_ID" => "160",
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>