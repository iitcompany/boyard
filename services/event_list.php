<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Журнал изменений");?>
<?
$APPLICATION->IncludeComponent("bitrix:event_list", ".default", array(
	"USER_PATH" => "#SITE_ID#company/personal/user/#user_id#/",
	"PAGE_NUM" => "10",
	"FILTER" => array(
		0 => "1",
		1 => "2",
		2 => "USERS",
		3 => "PAGE_EDIT",
		4 => "MENU_EDIT",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>