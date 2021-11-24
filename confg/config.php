<?php

session_start();
require_once('../App/filtre_variable.php');
$dataConfig = file_get_contents("config/config.txt");
if(empty($dataConfig)){
    ?>
        <script>window.location.replace("install.php")</script>
    <?php
}
$dataConfig = explode(';', $dataConfig);

if (!defined('DB_SERVER')) define('DB_SERVER', $dataConfig[0]);
if (!defined('DB_USER')) define('DB_USER', $dataConfig[1]);
if (!defined('DB_PWD')) define('DB_PWD', $dataConfig[2]);
if (!defined('DB_NAME')) define('DB_NAME', $dataConfig[3]);
if (!defined('DSN')) define('DSN', 'mysql:host='.DB_SERVER.'; dbname='.DB_NAME);