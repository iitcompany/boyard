<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.form", 
	"with_description", 
	array(
		"VOTE_ID" => $_REQUEST["VOTE_ID"],
		"VOTE_RESULT_TEMPLATE" => "vote_result.php?VOTE_ID=#VOTE_ID#",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => "with_description"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>