<?
define("STOP_STATISTICS", true);
define("NO_KEEP_STATISTIC", 'Y');
define("NO_AGENT_STATISTIC",'Y');
define("NO_AGENT_CHECK", true);
define("DisableEventsCheck", true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (\Bitrix\Main\Loader::includeModule("intranet"))
{
	$firstPageLink = CIntranetUtils::getB24FirstPageLink();
	if ($firstPageLink)
	{if (SITE_TEMPLATE_ID !== "bitrix24")
		LocalRedirect(SITE_DIR."desktop.php");
	else LocalRedirect($firstPageLink);
	}
}

require_once($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/include/epilog_after.php");