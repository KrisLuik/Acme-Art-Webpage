<?php

define('DB_NAME', 'Assessment_3');
define('DB_USER', 'adminer');
define('DB_PASSWORD', 'P@ssw0rd');
define('DB_HOST', 'localhost');

$pdo = new PDO("mysql:host=localhost" . DB_HOST . "; dbname=Assessment_3" . DB_NAME, DB_USER, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



?>