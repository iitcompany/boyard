<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(GetMessage("VI_PAGE_LINES_TITLE"));
?>


<?$APPLICATION->IncludeComponent(
    "bitrix:intranet.popup.provider",
    "",
    array(
        "COMPONENT_NAME" => "bitrix:voximplant.config",
        "COMPONENT_TEMPLATE_NAME" => "",
        "COMPONENT_POPUP_TEMPLATE_NAME" => "",
        "COMPONENT_PARAMS" =>     array()
    ),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>