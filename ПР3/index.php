<?php

if($_COOKIE['user_data']) //при наличии куки их запись в переменную
    $user_data = unserialize(base64_decode($_COOKIE['user_data']));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['regme']) { //если запрос пришел из формы регистрации
    $name = strip_tags(trim($_POST['name']));
    $age = strip_tags(trim($_POST['age']));
    $login = strip_tags(trim($_POST['login']));
    $password = strip_tags(trim($_POST['password']));
    $password = password_hash($password, PASSWORD_DEFAULT);
    $counter = 1;

    if ($name && $age && $login && $password) {
        $user_data = ['name' => $name, 'age' => $age, 'login' => 'login', 'password' => $password, 'counter' => $counter];
        setcookie('user_data', base64_encode(serialize($user_data)), time()+3600*36, '/');
    }
echo "stringggg";
  }

  if ($_POST['logout']) { //выход из пользователя
    setcookie('user_data', '', time()-30, '/');


  }

  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}


if(!$user_data['login']) {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="ФИО">
    <input type="date" name="age">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password">
    <input type="submit" name="regme" value="Зарегистрироваться">
</form>

<?php } else {

$counter = $user_data['counter']; //Счетчик
    $counter++;


$name = $user_data['name'];
$age = $user_data['age'];
$login = $user_data['login'];
$password = $user_data['password'];
 $user_data = ['name' => $name, 'age' => $age, 'login' => 'login', 'password' => $password, 'counter' => $counter];

  setcookie('user_data', base64_encode(serialize($user_data)), time()+3600*36, '/');
?>

  <form action="<?= $_SERVER['PHP_SELF'] ?>" method='post'>
      <input type='submit' value='Выход' name='logout'>
  </form>

  <p>ФИО пользователя: <?php echo $user_data['name']; ?></p>
  <p>Дата рождения: <?php echo $user_data['age']; ?></p>
  <p>Логин пользователя: <?php echo $user_data['login']; ?></p>
  <p>Пароль пользователя: <?php echo $user_data['password']; ?></p>
  <p>Количество входов на сайт: <?php echo $user_data['counter']; ?></p>

<?php
}
