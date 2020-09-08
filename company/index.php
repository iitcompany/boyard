<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск сотрудника");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:intranet.search", 
	".default", 
	array(
		"STRUCTURE_PAGE" => "structure.php",
		"PM_URL" => "/company/personal/messages/chat/#USER_ID#/",
		"PATH_TO_USER_EDIT" => "/company/personal/user/#user_id#/edit/",
		"PATH_TO_CONPANY_DEPARTMENT" => "/company/structure.php?set_filter_structure=Y&structure_UF_DEPARTMENT=#ID#",
		"STRUCTURE_FILTER" => "structure",
		"FILTER_1C_USERS" => "N",
		"FILTER_SECTION_CURONLY" => "N",
		"NAME_TEMPLATE" => "#LAST_NAME# #NAME# #SECOND_NAME#",
		"SHOW_LOGIN" => "Y",
		"SHOW_ERROR_ON_NULL" => "Y",
		"ALPHABET_LANG" => array(
			0 => "ru",
			1 => "",
		),
		"NAV_TITLE" => "Сотрудники",
		"SHOW_NAV_TOP" => "N",
		"SHOW_NAV_BOTTOM" => "Y",
		"SHOW_UNFILTERED_LIST" => "Y",
		"USERS_PER_PAGE" => "25",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "604800",
		"DATE_FORMAT" => "d.m.Y",
		"DATE_FORMAT_NO_YEAR" => "d.m",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"SHOW_DEP_HEAD_ADDITIONAL" => "N",
		"SHOW_YEAR" => "Y",
		"PATH_TO_VIDEO_CALL" => "/company/personal/video/#USER_ID#/",
		"FILTER_NAME" => "company_search",
		"FILTER_DEPARTMENT_SINGLE" => "Y",
		"FILTER_SESSION" => "N",
		"USE_VIEW_SELECTOR" => "Y",
		"DEFAULT_VIEW" => "list",
		"LIST_VIEW" => "list",
		"TABLE_VIEW" => ".default",
		"USER_PROPERTY_TABLE" => array(
			0 => "PERSONAL_PHOTO",
			1 => "FULL_NAME",
			2 => "EMAIL",
			3 => "PERSONAL_MOBILE",
			4 => "WORK_POSITION",
			5 => "WORK_PHONE",
			6 => "UF_DEPARTMENT",
			7 => "UF_PHONE_INNER",
		),
		"USER_PROPERTY_EXCEL" => array(
			0 => "NAME",
			1 => "LAST_NAME",
			2 => "EMAIL",
			3 => "PERSONAL_MOBILE",
			4 => "UF_PHONE_INNER",
		),
		"USER_PROPERTY_LIST" => array(
			0 => "PERSONAL_PHOTO",
			1 => "EMAIL",
			2 => "UF_DEPARTMENT",
			3 => "UF_PHONE_INNER",
			4 => "UF_SKYPE",
		),
		"EXTRANET_TYPE" => "",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"USER_PROPERTY_GROUP" => array(
			0 => "EMAIL",
			1 => "PERSONAL_PHONE",
			2 => "PERSONAL_MOBILE",
			3 => "WORK_PHONE",
		)
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
