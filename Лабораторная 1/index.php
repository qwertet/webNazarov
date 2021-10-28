<?php

require_once 'list.php';
require_once 'function.php';

$page = $_GET['sub'] ?? $_GET['page'];



if (!array_key_exists($page, $array) or !$_GET['sub'] > 1 or ($_GET['sub'] && !array_key_exists($_GET['page'], $array[$page]['sub'])) or $_GET['sub'] && count($_GET) != 2)  { //вторая часть с $_GETsub проверка на подстарницы
	header("Location :" . $_SERVER['SCRIPT_NAME'] . '?page=main');
	exit;
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
      <div class="logo">
        <img src="logo.jpg" alt="">
      </div>
      <div class="menu-list">
        <?= build($array, true);?>
      </div>
    </header>

<div style="display: flex;">

	<?php

		if ($page && $array[$page]['sub'] ) {
			echo build($array[$page]['sub'], false, $page);
		}

	?>

</div>
</body>
</html>
