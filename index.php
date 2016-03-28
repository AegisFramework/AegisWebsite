<?php

	/**
	 * ==============================
	 * Aegis Framework | MIT License
	 * http://www.aegisframework.com/
	 * ==============================
	 */

 	// Uncomment on Production
    //error_reporting(0);

	include("lib/aegis.php");
	$session = new Session();


	$router = new Router("localhost/AegisWebsite");

	$meta = [
		"title" => "Aegis Framework",
		"description" => "Aegis is a simple, fast and easy to use Web Development Framework.",
		"keywords" => "framework,aegis,web,development,php,js,javascript,html,css,template,simple,fast",
		"author" => "Diego Islas Ocampo",
		"twitter" => "@HyuchiaDiego",
		"google" => "+HyuchiaDiego",
		"domain" => $router -> getBaseUrl(),
		"route" => 	$router -> getFullUrl(),
		"year" => date("Y"),
		"shareimage" => "share.png"
	];

	$router -> registerRoute("/", new View("main", null, $meta));

	$router -> registerRoute("/css", new View("css", null, $meta));

	$router -> registerRoute("/php", new View("php", null, $meta));

	$router -> registerRoute("/javascript", new View("javascript", null, $meta));

	$router -> listen();
?>