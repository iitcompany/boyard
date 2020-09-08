<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросы");
?><p>В данном разделе представлены активные опросы портала, а также история всех предыдущих голосований. Вы можете проголосовать по любому активному опросу.</p>

<?$APPLICATION->IncludeComponent(
	"bitrix:voting.list", 
	".default", 
	array(
		"CHANNEL_SID" => array(
			0 => "COMPANY_s1",
		),
		"VOTE_FORM_TEMPLATE" => "vote_new.php?VOTE_ID=#VOTE_ID#",
		"VOTE_RESULT_TEMPLATE" => "vote_result.php?VOTE_ID=#VOTE_ID#",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>