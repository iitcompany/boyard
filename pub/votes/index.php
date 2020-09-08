<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросы");
?><div>
	 <?$APPLICATION->IncludeComponent("bitrix:voting.list", "template1", Array(
	"CHANNEL_SID" => array(	// Группа опросов
			0 => "EXTRANET_INTERVIEWS",
		),
		"VOTE_FORM_TEMPLATE" => "vote_new.php?VOTE_ID=#VOTE_ID#",	// Страница для вывода пустой формы опроса
		"VOTE_RESULT_TEMPLATE" => "vote_result.php?VOTE_ID=#VOTE_ID#",	// Страница для вывода диаграмм результатов опроса
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>
<div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>