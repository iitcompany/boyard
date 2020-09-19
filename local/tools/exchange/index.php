<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

define('STOP_STATISTICS', true);
define("NOT_CHECK_PERMISSIONS", true);
define('NO_KEEP_STATISTIC', 'Y');
define('NO_AGENT_STATISTIC', 'Y');
define('DisableEventsCheck', true);
define('BX_SECURITY_SHOW_MESSAGE', true);
define('XHR_REQUEST', true);

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
header("Access-Control-Allow-Origin: *");

$arResponse = [];

if (isset($_REQUEST['action']) && $_REQUEST['action'])
{
    if ((!isset($_REQUEST['login']) || empty($_REQUEST['login'])) ||
        (!isset($_REQUEST['pass']) || empty($_REQUEST['pass'])))
    {
        $arResponse['result'] = false;
        $arResponse['error'] = 'Не корректные данные для авторизации';
    }
    else
    {
        if (auth($_REQUEST['login'], $_REQUEST['pass']))
        {
            $fileType = isset($_REQUEST['type']) && !empty($_REQUEST['type']) ? strtolower($_REQUEST['type']) : 'xml';
            $fileName = 'crm_' . $_REQUEST['action'] . ' _' . date('d_m_Y');
            fileForceDownload(__DIR__ . '/files/' . $fileType . '/' . $fileName .  '.' . $fileType);

        }
        else
        {
            $arResponse['result'] = false;
            $arResponse['error'] = 'Ошибка авторизации';
        }
    }
}
else
{
    $arResponse['result'] = false;
    $arResponse['error'] = 'Не указан action';
}

header('Content-Type: application/json');
echo json_encode($arResponse, JSON_UNESCAPED_UNICODE);
die();

function fileForceDownload($file)
{
    if (file_exists($file)) {
        // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
        // если этого не сделать файл будет читаться в память полностью!
        if (ob_get_level()) {
            ob_end_clean();
        }
        // заставляем браузер показать окно сохранения файла
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        // читаем файл и отправляем его пользователю
        readfile($file);
        exit;
    }
}
function auth($login, $pass)
{
    if (empty($login) || empty($pass)) {
        return false;
    }

    $arUser = CUser::GetList($by, $order, [
        'LOGIN' => $login
    ], [])->Fetch();

    if ($arUser['ID']) {
        $salt = substr($arUser['PASSWORD'], 0, (strlen($arUser['PASSWORD']) - 32));
        $realPassword = substr($arUser['PASSWORD'], -32);
        $password = md5($salt.$pass);

        if ($realPassword == $password)
        {
            global $USER;
            $USER->Authorize($arUser['ID']);
            return true;
        }
    }

    return false;
}