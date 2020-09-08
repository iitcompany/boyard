<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"icons", 
	array(
		"AJAX_MODE" => "N",
		"RESTART" => "N",
		"CHECK_DATES" => "N",
		"USE_TITLE_RANK" => "N",
		"arrWHERE" => array(
			0 => "iblock_news",
			1 => "iblock_library",
			2 => "blog",
			3 => "intranet",
		),
		"arrFILTER" => array(
			0 => "no",
		),
		"SHOW_WHERE" => "Y",
		"PAGE_RESULT_COUNT" => "50",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"SHOW_RATING" => "",
		"RATING_TYPE" => "",
		"PATH_TO_USER_EDIT" => "/company/personal/user/#user_id#/edit/",
		"PATH_TO_USER_PROFILE" => "/company/personal/user/#user_id#/",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "icons",
		"NO_WORD_LOGIC" => "N",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"SHOW_WHEN" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"SHOW_ITEM_TAGS" => "Y",
		"TAGS_INHERIT" => "Y",
		"SHOW_ITEM_DATE_CHANGE" => "Y",
		"SHOW_ORDER_BY" => "Y",
		"SHOW_TAGS_CLOUD" => "N",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>