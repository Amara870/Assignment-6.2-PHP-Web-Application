<?php

    require_once "db_pass.php";

    $host = "demo-mysql";

    $db = "A9.2";

    $user = "root@192.168.30.20";

    $pass = $dbpass;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

?>