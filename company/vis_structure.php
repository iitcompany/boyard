<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура компании");
$APPLICATION->AddChainItem("Структура компании", "vis_structure.php");
?>
<?
$APPLICATION->IncludeComponent("bitrix:intranet.structure.visual", ".default", array(
	"DETAIL_URL" => "/company/structure.php?set_filter_structure=Y&structure_UF_DEPARTMENT=#ID#",
	"PROFILE_URL" => "/company/personal/user/#ID#/",
	"PM_URL" => "/company/personal/messages/chat/#ID#/",
	"NAME_TEMPLATE" => "#LAST_NAME# #NAME# #SECOND_NAME#",
	"SHOW_LOGIN" => "Y",
	"USE_USER_LINK" => "Y",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "2592000",
	"PATH_TO_VIDEO_CALL" => "/company/personal/video/#USER_ID#/"
	),
	false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>