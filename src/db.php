<?php
session_start();

    define("DB_HOST", 'mysql');
    define("DB_USERNAME", 'test_user');
    define("DB_PASSWORD", 'test_password');
    define("DB_DATABASE", 'php_mysql_crud');
    // define("DB_PORT", '3306');
 
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die();

?>
