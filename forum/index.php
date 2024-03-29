<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форум");
?><?$APPLICATION->IncludeComponent(
	"bitrix:forum", 
	".default", 
	array(
		"THEME" => "beige",
		"SHOW_TAGS" => "Y",
		"SEO_USER" => "Y",
		"SEO_USE_AN_EXTERNAL_SERVICE" => "Y",
		"SHOW_FORUM_USERS" => "Y",
		"SHOW_SUBSCRIBE_LINK" => "N",
		"SHOW_AUTH_FORM" => "N",
		"SHOW_NAVIGATION" => "Y",
		"SHOW_LEGEND" => "Y",
		"SHOW_STATISTIC_BLOCK" => array(
			0 => "STATISTIC",
			1 => "BIRTHDAY",
			2 => "USERS_ONLINE",
		),
		"SHOW_FORUMS" => "Y",
		"SHOW_FIRST_POST" => "N",
		"SHOW_AUTHOR_COLUMN" => "N",
		"TMPLT_SHOW_ADDITIONAL_MARKER" => "",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"PAGE_NAVIGATION_TEMPLATE" => "forum",
		"PAGE_NAVIGATION_WINDOW" => "5",
		"AJAX_POST" => "N",
		"WORD_WRAP_CUT" => "23",
		"WORD_LENGTH" => "50",
		"USE_LIGHT_VIEW" => "Y",
		"SEF_MODE" => "N",
		"CHECK_CORRECT_TEMPLATES" => "Y",
		"FID" => array(
			0 => "13",
		),
		"USER_PROPERTY" => array(
		),
		"USER_FIELDS" => array(
			0 => "UF_FORUM_MESSAGE_DOC",
		),
		"FORUMS_PER_PAGE" => "10",
		"TOPICS_PER_PAGE" => "10",
		"MESSAGES_PER_PAGE" => "10",
		"TIME_INTERVAL_FOR_USER_STAT" => "10",
		"DATE_FORMAT" => "d.m.Y",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"USE_NAME_TEMPLATE" => "N",
		"IMAGE_SIZE" => "500",
		"ATTACH_MODE" => array(
			0 => "NAME",
		),
		"ATTACH_SIZE" => "90",
		"EDITOR_CODE_DEFAULT" => "N",
		"SEND_MAIL" => "E",
		"SEND_ICQ" => "A",
		"SET_NAVIGATION" => "Y",
		"SET_TITLE" => "Y",
		"SET_DESCRIPTION" => "Y",
		"SET_PAGE_PROPERTY" => "Y",
		"USE_RSS" => "Y",
		"SHOW_FORUM_ANOTHER_SITE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_TIME_USER_STAT" => "60",
		"CACHE_TIME_FOR_FORUM_STAT" => "3600",
		"RESTART" => "N",
		"NO_WORD_LOGIC" => "N",
		"RSS_TYPE_RANGE" => array(
			0 => "RSS1",
			1 => "RSS2",
			2 => "ATOM",
		),
		"RSS_CACHE" => "1800",
		"RSS_COUNT" => "30",
		"SHOW_VOTE" => "N",
		"RATING_ID" => array(
		),
		"SEF_FOLDER" => "/forum/",
		"SHOW_RATING" => "",
		"RATING_TYPE" => "",
		"HELP_CONTENT" => "",
		"RULES_CONTENT" => "",
		"PATH_TO_AUTH_FORM" => "",
		"NAME_TEMPLATE" => "",
		"RSS_TN_TITLE" => "",
		"RSS_TN_DESCRIPTION" => "",
		"VARIABLE_ALIASES" => array(
			"FID" => "FID",
			"TID" => "TID",
			"MID" => "MID",
			"UID" => "UID",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>