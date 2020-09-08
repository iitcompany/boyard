<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Распознование лиц");
?><?$APPLICATION->IncludeComponent(
	"bitrix:faceid.timeman.start",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>