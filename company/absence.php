<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("График отсутствий");
?><?$APPLICATION->IncludeComponent(
	"bitrix:intranet.absence.calendar", 
	".default", 
	array(
		"FILTER_NAME" => "absence",
		"FILTER_SECTION_CURONLY" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"NAME_TEMPLATE" => "#LAST_NAME# #NAME#",
		"VIEW_START" => "month",
		"FILTER_CONTROLS" => array(
			0 => "DATEPICKER",
			1 => "TYPEFILTER",
			2 => "DEPARTMENT",
		),
		"FIRST_DAY" => "1",
		"DAY_START" => "9",
		"DAY_FINISH" => "18",
		"DAY_SHOW_NONWORK" => "N",
		"DATE_FORMAT" => "d.m.Y",
		"DATETIME_FORMAT" => "d.m.Y H:i:s"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>