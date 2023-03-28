<?php 

    define('WWW_ROOT', 'http://localhost:8888/');
    // define('WWW_ROOT', 'https://mattiasbellan.ca/');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    require(__DIR__ . "/classes/cards__class.php");
    require(__DIR__ . "/classes/projects__class.php");
    require('functions.php');
    require(__DIR__ . '/data/data.php');
?>