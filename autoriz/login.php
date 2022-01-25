<?php
session_start();
#require '../config/db_connect_2ex.php';
require '../config/db_connect.php';

	/*$host = 'localhost'; 
	$user = 'root'; //имя пользователя, по умолчанию это root
	$password = ''; //пароль, по умолчанию пустой
	$db_name = 'table_29m'; 
	#$password = 'rootwiki987'; //пароль, по умолчанию пустой
	#$db_name = 'wikidb'; 

    //Соединяемся с базой данных используя наши доступы:
	$link = mysqli_connect($host, $user, $password, $db_name)
        or die(mysgli_error($link));

    mysqli_query($link, "SET NAMES 'utf8'");
	// print "jjjjjjj1";*/

	if (!empty($_POST['PASSWORD']) and !empty($_POST['LOGIN'])) {

		$login = $_POST['LOGIN'];
		// print "jjjjjjj2";

		$query = "SELECT * FROM users31 WHERE LOGIN='$login'"; // получаем юзера по логину
		// print "jjjjjjj3";
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);

		// print "jjjjjjj4";
			
		if (!empty($user)) {
			$hash = $user['PASSWORD']; // соленый пароль из БД
			
		
			// Проверяем соответствие хеша из базы введенному паролю
			if (password_verify($_POST['PASSWORD'], $hash)) {
				
				$_SESSION['auth'] = true;
				
        		$_SESSION['user'] = $login;
				header("Location: ../index.html");
				#echo "Приветствую User! Для тебя открыты самые интересные статьи!";
				#echo("Здравствуйте,   ". $_POST['LOGIN']);
			} else {
				echo "<script>alert(\"Не верный пароль!\");</script>";
			}
		} 
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>example-news</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="../css/fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="../css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="billboard light">
		<header class="wrapper light">
		
		</header>

		<div class="caption light animated wow fadeInDown clearfix">
			<div id="login-form">
				<h3>Авторизация</h3>
				<form action="" method="POST">
					<!-- <form method="post" > -->
					<input type="text" name="LOGIN" placeholder="Логин" required><br/>
					<input type="password" name="PASSWORD" required> <br/>
					<input type="submit" value="Войти">
				</form>
			  </div> 
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src='../ga.js'></script>
</body>
</html>