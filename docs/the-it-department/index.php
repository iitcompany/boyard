<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Отдел ИТ");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/the-it-department/");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:disk.common", 
	".default", 
	array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/the-it-department/",
		"STORAGE_ID" => "161",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>