<?php
	session_start();
	#include_once './config/db_connect_2ex.php';
	require './config/db_connect.php';
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>example-news</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
			<div class = "bottons_reg">

			<?php 
				if (empty($_SESSION['auth']) or $_SESSION['auth'] === false) { 
					// echo "<button class=""shine-button"" onclick=""location.href= './autoriz/login.php'"">Войти</button>";
					echo '<button class="shine-button" onclick="location.href= \'./autoriz/login.php\'">Войти</button>';
					echo '<button class="shine-button" onclick="location.href= \'./autoriz/register.php\'">Зарегистрироваться</button>';
				} else
					echo '<form action="" method="POST"> <button class="shine-button" input name="exit" type="submit" value="Выход">Выход</button> </form>'

					#echo '<button class="shine-button">Выход</button>';
					#echo '<input type="submit"  value="Выход">';
				#<button class="shine-button" onclick="location.href= './autoriz/register.php'">Зарегистрироваться</button>
				#<button class="shine-button" onclick="location.href= './autoriz/login.php'">Выход</button>
			?>

			<div class="message">
				<?php
					if (!empty($_SESSION['auth']) or $_SESSION['auth'] === true) { 
						echo("Приветствую, ". $_SESSION['user'] . "!");
					}
				?>
			</div>

			<?php 
				if (isset($_POST['exit'])) {
						$_SESSION['auth'] = false;
						unset($_SESSION['user']);
						header("Refresh:0"); 
					// echo '<button class="shine-button" onclick="location.href= \'./autoriz/login.php\'">Войти</button>';
					// echo '<button class="shine-button" onclick="location.href= \'./autoriz/register.php\'">Зарегистрироваться</button>';
				 } //else 
				// 	echo '<form action="" method="POST"> <button class="shine-button" input name="exit" type="submit" value="Выход">Выход</button> </form>'
			?>




			<!--<form action="" method="POST">
     			<button class="shine-button" input name="exit" type="submit" value="Выход">Выход</button>
			</form>-->
			</div>
		
			<nav>
				<ul>
					<li><a href="index.php">Главная</a></li>
					<li><a href="list.php">Статьи</a></li>
					<li><a href="list.php">Новости</a></li>
					<li><a href="article.php">Путешествия</a></li>
					<li><a href="list.php">Здоровье</a></li>
					<li><a href="./mw/index.php">Вики</a></li>
				</ul>
			</nav>
		</header>

		<div class="caption dark animated wow fadeInDown clearfix">
			<h1>Будь в курсе событий вместе с нами</h1>
			<p>Добро пожаловать на сайт. Здесь собраны самые важные и интересные события, истории, рубрики.</p>
			<hr>
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->


	<section class="services wrapper">
		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<img class="icon" src="img/icon1.png" alt=""/>
				<span class="separator"></span>
				<h2>События</h2>
				<p> В стране и мире, главная информация. Мы первые в центре всех событий.</p>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<img class="icon" src="img/icon2.png" alt=""/>
				<span class="separator"></span>
				<h2>Список рубрик</h2>
				<p>Выберите для себя важную тему, рубрики для каждого.</p>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".4s">
				<img class="icon" src="img/icon3.png" alt=""/>
				<span class="separator"></span>
				<h2>Путешествия</h2>
				<p>Куда поехать? Узнай в этом разделе, всё самое интересное.</p>
			</li>
		</ul>
	</section><!--  End services  -->


	<section class="video">
		<h2 class="animated wow fadeInDown">Смотрите также</h2>
		<h3 class="animated wow fadeInDown">Видео дня, от нашего читателя</h3>
		<a href="http://www.youtube.com/embed/cBJyo0tgLnw" id="play_btn" class="fancybox animated wow flipInX" data-wow-duration="2s"></a>
	</section><!--  End video  -->


	<section class="blog_posts">
		<div class="wrapper">
			<div class="title animated wow fadeIn">
				<h2>Письма от читателей</h2>
				<h3>the most recent posts from our blog</h3>
				<hr class="separator"/>
			</div>

			<ul class="clearfix">
				<li class="animated wow fadeInDown">
					<div class="media">
						<div class="date">
							<span class="day">25</span>
							<span class="month">Jun</span>
						</div>
						<a href="#">
							<img src="img/blog_post1.jpg" alt=""/>
						</a>
					</div>
					<a href="#">
						<h1>Sed do eiusmod tempor incididunt.</h1>
					</a>
				</li>

				<li class="animated wow fadeInDown" data-wow-delay=".2s">
					<div class="media">
						<div class="date">
							<span class="day">11</span>
							<span class="month">May</span>
						</div>
						<a href="#">
							<img src="img/blog_post2.jpg" alt=""/>
						</a>
					</div>					
					<a href="#">
						<h1>Velit esse cillum dollore fugiat nulla.</h1>
					</a>
				</li>

				<li class="animated wow fadeInDown" data-wow-delay=".4s">
					<div class="media">
						<div class="date">
							<span class="day">13</span>
							<span class="month">Feb</span>
						</div>
						<a href="#">
							<img src="img/blog_post3.jpg" alt=""/>
						</a>
					</div>
					<a href="#">
						<h1>Officia deserunt mollit est anim laborum.</h1>
					</a>
				</li>

				<li class="animated wow fadeInDown" data-wow-delay=".6s">
					<div class="media">
						<div class="date">
							<span class="day">10</span>
							<span class="month">Jan</span>
						</div>
						<a href="#">
							<img src="img/blog_post4.jpg" alt=""/>
						</a>
					</div>
					<a href="#"><h1>Culpa qui officia deserunt 
					mollit ani
					m.</h1>
				</a>
				</li>
			</ul>
		</div>
	</section><!--  End blog_posts  -->


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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src='../ga.js'></script>
</body>
</html>