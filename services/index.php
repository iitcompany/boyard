<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Резервирование переговорных");
?><?$APPLICATION->IncludeComponent(
	"bitrix:intranet.reserve_meeting",
	"",
	Array(
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "events",
		"NAME_TEMPLATE" => "",
		"PATH_TO_CONPANY_DEPARTMENT" => "/company/structure.php?set_filter_structure=Y&structure_UF_DEPARTMENT=#ID#",
		"PATH_TO_USER" => "/company/personal/user/#USER_ID#/",
		"PATH_TO_VIDEO_CALL" => "/company/personal/video/#USER_ID#/",
		"PM_URL" => "/company/personal/messages/chat/#USER_ID#/",
		"SEF_MODE" => "N",
		"SET_NAVCHAIN" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_LOGIN" => "Y",
		"SHOW_YEAR" => "Y",
		"USERGROUPS_CLEAR" => array("1"),
		"USERGROUPS_MODIFY" => array("1"),
		"USERGROUPS_RESERVE" => array("11"),
		"VARIABLE_ALIASES" => Array("item_id"=>"item_id","meeting_id"=>"meeting_id","page"=>"page"),
		"WEEK_HOLIDAYS" => array("5","6")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>