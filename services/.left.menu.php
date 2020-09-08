<?
$aMenuLinks = Array(
	Array(
		"Электронные заявки", 
		"/services/requests/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Requests') && CSite::InGroup(array(1))" 
	),
	Array(
		"Обучение", 
		"/services/learning/", 
		Array("/services/course.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Learning')" 
	),
	Array(
		"Опросы, голосования", 
		"/services/votes.php", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,10,12))" 
	),
	Array(
		"База знаний BOYARD", 
		"/services/wiki/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Wiki')" 
	),
	Array(
		"Вопросы и ответы", 
		"/services/faq/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Техническая поддержка", 
		"/services/support.php?show_wizard=Y", 
		Array("/services/support.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Support') && CSite::InGroup(array(1))" 
	),
	Array(
		"Открытые линии", 
		"/services/openlines/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,12))" 
	),
	Array(
		"Бизнес-процессы", 
		"/services/bp/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,12))" 
	),
	Array(
		"Почта", 
		"/mail/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,28))" 
	),
	Array(
		"Распознование лиц", 
		"/services/recognition-whether/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1))" 
	),
	Array(
		"Лаборатория AI", 
		"/ai/", 
		Array(), 
		Array(), 
		"" 
	)
);
?>