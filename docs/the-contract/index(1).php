<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Договоры");?> <?$APPLICATION->IncludeComponent(
	"bitrix:webdav",
	".default",
	array(
	"RESOURCE_TYPE" => "IBLOCK",	// Источник данных
		"IBLOCK_TYPE" => "library",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "35",	// Код информационного блока
		"NAME_FILE_PROPERTY" => "FILE",
		"REPLACE_SYMBOLS" => "N",
		"USE_AUTH" => "Y",	// Использовать авторизацию для анонимных пользователей в webdav
		"UPLOAD_MAX_FILESIZE" => "1024",	// Максимальный размер загружаемого файла (не должен превышать 1024Мб) (Мб)
		"UPLOAD_MAX_FILE" => "4",
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_FOLDER" => "/docs/the-contract/",	// Каталог ЧПУ (относительно корня сайта)
		"AJAX_MODE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"COLUMNS" => array(	// Колонки, которые будут показаны в списке документов
			0 => "NAME",
			1 => "TIMESTAMP_X",
			2 => "USER_NAME",
			3 => "FILE_SIZE",
			4 => "WF_STATUS_ID",
			5 => "",
		),
		"PAGE_ELEMENTS" => "50",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"STR_TITLE" => "Договора",
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"DISPLAY_PANEL" => "N",
		"SHOW_TAGS" => "Y",	// Показывать теги
		"TAGS_PAGE_ELEMENTS" => "50",
		"TAGS_PERIOD" => "",
		"TAGS_INHERIT" => "Y",
		"TAGS_FONT_MAX" => "30",
		"TAGS_FONT_MIN" => "14",
		"TAGS_COLOR_NEW" => "486DAA",
		"TAGS_COLOR_OLD" => "486DAA",
		"TAGS_SHOW_CHAIN" => "Y",
		"USE_COMMENTS" => "Y",	// Разрешить отзывы
		"FORUM_ID" => "14",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"USE_CAPTCHA" => "Y",
		"PREORDER" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"FOLDER" => "undefined",	// Путь к папке (относительно корня сайта)
		"AUTO_PUBLISH" => "N",	// Автоматическая публикация при загрузке
		"DEFAULT_EDIT" => "Y",	// По умолчанию открывать документы для редактирования
		"NAME_TEMPLATE" => "",	// Отображение имени
		"SHOW_RATING" => "",	// Включить рейтинг
		"RATING_TYPE" => "",	// Вид кнопок рейтинга
		"SEF_URL_TEMPLATES" => array(
			"sections" => "#PATH#",
			"section_edit" => "folder/edit/#SECTION_ID#/#ACTION#/",
			"element" => "element/view/#ELEMENT_ID#/",
			"element_edit" => "element/edit/#ACTION#/#ELEMENT_ID#/",
			"element_history" => "element/history/#ELEMENT_ID#/",
			"element_history_get" => "element/historyget/#ELEMENT_ID#/#ELEMENT_NAME#",
			"element_upload" => "element/upload/#SECTION_ID#/",
			"user_view" => "/company/personal/user/#USER_ID#/",
			"connector" => "connector/",
			"help" => "help",
			"search" => "search/",
		),
		"VARIABLE_ALIASES" => array(
			"sections" => "",
			"section_edit" => "",
			"element" => "",
			"element_edit" => "",
			"element_history" => "",
			"element_history_get" => "",
			"element_upload" => "",
			"user_view" => "",
			"connector" => "",
			"help" => "",
			"search" => "",
		)
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>