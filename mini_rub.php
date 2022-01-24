<?php 
	session_start();
	#include_once './config/db_connect_2ex.php';
	require './config/db_connect.php';
		
	if (!empty($_SESSION['auth'])): 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>example-news</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
	<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/cssWatch.js"></script>

</head>
<body>

	<section class="billboard dark">
		<header class="wrapper dark">
			<nav>
				<ul>
                <li><a href="main.php">Главная</a></li>
					<li><a href="list.php">Статьи</a></li>
					<li><a href="list.php">Новости</a></li>
					<li><a href="article.php">Путешествия</a></li>
					<li><a href="list.php">Здоровье</a></li>
				</ul>
			</nav>
		</header>

		<div class="rubric_img">
			<h2>Это подрубрика для авторизованного пользователя.</h2>
            <p> Здесь должен был быть текст из раздела подрубрики, а пока посмотрите на фоновую картинку...</p>
		</div>
        
	</section><!--  End billboard  -->

	<footer>
		<div class="wrapper">
			<nav>
				<ul>
                <li><a href="list.php">Статьи</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="list.php">Новости</a></li>
					<li><a href="list.php">Рубрики</a></li>
					<li><a href="#">Обратная связь</a></li>
				</ul>
			</nav>
		</div>		
	</footer><!--  End footer  -->

	<?php else: ?>
			<h2>Пожалуйста авторизуйтесь!</h2>
			<p> Статьи для вас не доступны</p>
	<?php endif; ?>
    <script src='../ga.js'></script>
</body>
</html>

