<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документы-экстранет");
?><?$APPLICATION->IncludeComponent(
	"bitrix:disk.aggregator",
	"",
	Array(
		"CACHE_TIME" => 3600,
		"SEF_FOLDER" => "//extranet/documents-the-extranet/",
		"SEF_MODE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>