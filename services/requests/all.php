<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Все заявки");
?><?$APPLICATION->IncludeComponent(
	"bitrix:form.result.list.all", 
	"template1", 
	array(
		"COMPONENT_TEMPLATE" => "template1",
		"EDIT_URL" => "form_edit.php?WEB_FORM_ID=#FORM_ID#&RESULT_ID=#RESULT_ID#",
		"FORMS" => array(
			0 => "",
			1 => "",
		),
		"LIST_URL" => "form_list.php?WEB_FORM_ID=#FORM_ID#",
		"NUM_RESULTS" => "10",
		"VIEW_URL" => "form_view.php?WEB_FORM_ID=#FORM_ID#&RESULT_ID=#RESULT_ID#"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>