 <?
define("STOP_STATISTICS", true);
define("NO_KEEP_STATISTIC", 'Y');
define("NO_AGENT_STATISTIC",'Y');
define("NO_AGENT_CHECK", true);
define("DisableEventsCheck", true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (SITE_TEMPLATE_ID !== "bitrix24")
LocalRedirect(SITE_DIR."index.php");

else LocalRedirect(SITE_DIR."stream/stream.php");

require_once($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/include/epilog_after.php"); 