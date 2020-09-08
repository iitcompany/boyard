<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/docs/shared/index.php");
$APPLICATION->SetTitle("Бухгалтерия");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), "/docs/accounting/");
?><?$APPLICATION->IncludeComponent(
	"bitrix:disk.common",
	".default",
	Array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/accounting/",
		"STORAGE_ID" => "172",
		"VARIABLE_ALIASES" => Array(
		)
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>