<?
$aMenuLinks = Array(
	Array(
		"Поиск сотрудника", 
		"/company/index.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Телефонный справочник", 
		"/company/telephones.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Структура компании", 
		"/company/vis_structure.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Кадровые изменения", 
		"/company/events.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('StaffChanges')" 
	),
	Array(
		"График отсутствий", 
		"/company/absence.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('StaffAbsence')" 
	),
	Array(
		"Рабочее время", 
		"/company/timeman.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('timeman') && CSite::InGroup(array(1))" 
	),
	Array(
		"Рабочие отчеты", 
		"/company/work_report.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('timeman') && CSite::InGroup(array(1))" 
	),
	Array(
		"Эффективность", 
		"/company/report.php", 
		Array(), 
		Array(), 
		"IsModuleInstalled('tasks') && CSite::InGroup(array(1))" 
	),
	Array(
		"Доска почета", 
		"/company/leaders.php", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1))" 
	),
	Array(
		"Дни рождения", 
		"/company/birthdays.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Фотогалерея", 
		"/company/gallery/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Gallery')" 
	),
	Array(
		"Мои процессы", 
		"/company/personal/processes/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Lists') && CSite::InGroup(array(1))" 
	)
);
?>