<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоратив 24.12.2016 г.");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.tv", 
	"round", 
	array(
		"ALLOW_SWF" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEFAULT_BIG_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png",
		"DEFAULT_SMALL_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png",
		"DURATION" => "23",
		"ELEMENT_ID" => "",
		"HEIGHT" => "",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "services",
		"LOGO" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/logo.png",
		"PATH_TO_FILE" => "22",
		"SECTION_ID" => "7419",
		"SHOW_COUNTER_EVENT" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"WIDTH" => "",
		"COMPONENT_TEMPLATE" => "round"
	),
	false
);?><br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>