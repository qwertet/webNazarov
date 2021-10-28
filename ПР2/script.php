<?php
session_start();
if($_SERVER['REQUEST_METHOD'] != 'POST' || !isset($_SESSION['path'])) { //исключение запросов кроме запроса из нужного файла
    exit;
}





if (isset($_POST['answer']) && $_POST['answer'] != "" && is_numeric($_POST['answer']) && preg_match("/\D/", $_POST['answer']) == 0) { //проверки овтета, удаление слэшей

	if ($_SESSION['answer'] == $_POST['answer']) { //сравнение полученного ответа и ответа из формулы
		$_SESSION['result'] = true;
	} else {
		$_SESSION['result'] = false;

	}

} else {

	$_SESSION['result'] = null;
}

header("Location: " . $_SESSION['path']);
		exit;
?>
