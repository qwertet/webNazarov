<?php

require_once "function.php";

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
$array = range(2,9);
$path = $_SERVER['PHP_SELF'] . "?page=";

if (isset($_GET['page'])) {
$page = $_GET['page'];

}


if($_SERVER['PHP_SELF'] != $_SERVER['SCRIPT_NAME']) {
    header("Location: {$_SERVER['SCRIPT_NAME']}");
    exit;
}

if(!empty($_GET)){
    if($_GET['page']){
        if(!in_array($page, $array) || count($_GET) > 1) {
            header("Location: {$_SERVER['PHP_SELF']}");
            exit;
        }
    } else {
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    }
}

echo "<div style='display: flex'>";

if(isset($page)){
    echo build($page, $page);
    echo "<a style='margin-left: 40px' href='{$_SERVER['PHP_SELF']}'>Вывести все</a>";
} else {
    echo build();
}

echo "</div>";
