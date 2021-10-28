<?php
session_start();

if (!empty($_GET) || $_SERVER['PATH_INFO'])
{
    header("Location: " . $_SERVER['SCRIPT_NAME']);
    exit;
}

if (!is_null($_SESSION['result'])) //проверка на наличие ответа от пользователя
{
    echo $_SESSION['result'] ? "Ответ верный" : "Ответ не верный";
    echo "<br><br>";
    echo "Правильный ответ: " . $_SESSION['answer'];

    echo "<br><a href={$_SERVER['PHP_SELF']}>Попробовать снова</a>";
    unset($_SESSION['result']);

}
else
{

    $n = rand(0, 10);
    $task = 3 * $n;
    $_SESSION['answer'] = (string)$task;

    echo '3 * n = ';
    echo '	<form action="" method="POST">
		<input type="text" name="answer">
		<input type="submit" name="send">
	</form>';

}
