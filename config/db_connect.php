<?php

bba1f3171b1234:312f7d06

if ($_SERVER['SERVER_NAME'] == "ira-kom-app.herokuapp.com/") {
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$host = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$dbname = substr($url["path"], 1);
} else {
	$host = 'localhost';
	$dbname = 'wikidb';
	$username = 'root';
	$password = '';
}



    // $host = 'localhost'; 
	// $user = 'root'; //имя пользователя, по умолчанию это root
	// $password = ''; //пароль, по умолчанию пустой
	// $db_name = 'wikidb'; 

    //Соединяемся с базой данных используя наши доступы:
	$link = mysqli_connect($host, $user, $password, $db_name)
        or die(mysgli_error($link));

    mysqli_query($link, "SET NAMES 'utf8'");

?>