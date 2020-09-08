<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("15 лет BOYARD");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.tv", 
	"round", 
	array(
		"ALLOW_SWF" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "round",
		"DEFAULT_BIG_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png",
		"DEFAULT_SMALL_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png",
		"DURATION" => "23",
		"ELEMENT_ID" => "",
		"HEIGHT" => "",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "services",
		"LOGO" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/logo.png",
		"PATH_TO_FILE" => "22",
		"SECTION_ID" => "7437",
		"SHOW_COUNTER_EVENT" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"WIDTH" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>