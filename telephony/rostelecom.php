<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ростелеком");
?><?$APPLICATION->IncludeComponent(
	"bitrix:intranet.popup.provider",
	"",
	Array(
		"COMPONENT_NAME" => "bitrix:voximplant.config.edit",
		"COMPONENT_PARAMS" => array(),
		"COMPONENT_POPUP_TEMPLATE_NAME" => "",
		"COMPONENT_TEMPLATE_NAME" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>