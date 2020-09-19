<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

use Bitrix\Main\Page\Asset;

foreach (glob(__DIR__ . "/classes/*.php") as $classFile) {
    require_once $classFile;
}

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/handlers.php';

//include js
foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/local/js/*.js") as $file) {
    Asset::getInstance()->addJs(str_replace($_SERVER['DOCUMENT_ROOT'], '', $file));
}

foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/local/tools/exchange/agents/*.php") as $agentFile) {
    require_once $agentFile;
}