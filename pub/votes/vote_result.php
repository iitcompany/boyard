<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.result", 
	"template1",
	Array(
		"CACHE_TIME" => "1200",
		"CACHE_TYPE" => "A",
		"VOTE_ID" => $_REQUEST["VOTE_ID"]
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>