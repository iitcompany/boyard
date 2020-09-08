<?
$aMenuLinks = Array(
	Array(
		"Официально", 
		"/about/index.php", 
		Array("/about/official.php"), 
		Array(), 
		"" 
	),
	Array(
		"Календарь событий", 
		"/about/calendar.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('CompanyCalendar') && CSite::InGroup(array(1))" 
	),
	Array(
		"Наша жизнь", 
		"/about/life.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"О компании", 
		"/about/company/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Фотогалерея", 
		"/about/gallery/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('CompanyPhoto')" 
	),
	Array(
		"Видеогалерея", 
		"/about/media.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('CompanyVideo')" 
	),
	Array(
		"Карьера, вакансии", 
		"/about/career.php", 
		Array("/about/resume.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('CompanyCareer') && CSite::InGroup(array(1))" 
	),
	Array(
		"Новости отрасли", 
		"/about/business_news.php", 
		Array(), 
		Array(), 
		"" 
	)
);
?>