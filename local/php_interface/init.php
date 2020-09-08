<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

foreach (glob(__DIR__ . "/classes/*.php") as $classFile) {
    require_once $classFile;
}

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/handlers.php';

