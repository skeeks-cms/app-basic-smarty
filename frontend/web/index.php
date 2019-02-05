<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */
define("ROOT_DIR",              dirname(dirname(__DIR__)));

$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "";
//print_r($ip);die;
if (in_array($ip, [
    '31.148.139.178',
]) && 1 == 1)
{
    defined('YII_ENV') or define('YII_ENV', 'dev');
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('ENV') or define('ENV', 'dev');
}
include ROOT_DIR . '/vendor/skeeks/cms/app-web.php';
