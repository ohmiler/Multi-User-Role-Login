<?php 

    $db_host = "localhost"; // localhost server
    $db_user = "root"; // database username
    $db_password = ""; // database password
    $db_name = "php_multiplelogin"; // database name

    try {

        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        $e->getMessage();
    }


?>