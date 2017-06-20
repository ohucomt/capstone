<?php
	//define db infomation
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "mymemos");

	//define URL
	define("ROOT_PATH", "/mymemo/");
	define("ROOT_URL", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/mymemo/");
?>