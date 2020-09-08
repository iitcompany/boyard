<?
$aMenuLinks = Array(
	Array(
		"Подключение", 
		"/telephony/connection.php", 
		Array(), 
		Array("menu_item_id"=>"menu_telephony_start"), 
		"Bitrix\\Voximplant\\Security\\Helper::isMainMenuEnabled() && CSite::InGroup(array(1))" 
	),
	Array(
		"Детализация звонков", 
		"/telephony/detail.php", 
		Array(), 
		Array("menu_item_id"=>"menu_telephony_detail"), 
		"Bitrix\\Voximplant\\Security\\Helper::isBalanceMenuEnabled()" 
	)
);
?>