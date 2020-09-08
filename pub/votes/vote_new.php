<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("BOYARD Опросы");
?><?$APPLICATION->IncludeComponent("bitrix:voting.form", "with_description1", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"VOTE_ID" => $_REQUEST["VOTE_ID"],	// Идентификатор опроса
		"VOTE_RESULT_TEMPLATE" => "vote_result.php?VOTE_ID=#VOTE_ID#",	// Страница для вывода диаграмм результатов опроса
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>