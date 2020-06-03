<?php

include_once "models/Pagina_Data.class.php";
$paginaData = new Pagina_Data();
$paginaData->title = "Miauwer";
$paginaData->addCSS("css/style.css");
$paginaData->addJavaScript("js/script.js");

$dbInfo = "mysql:host=localhost;dbname=miauwerdb";
$dbUser = "root";
$dbPassword = "";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

include_once "models/Sessie.class.php";
$sessie = new Sessie();

if (isset($_GET['logout'])){$sessie->logout();}
if( $sessie->isLoggedIn() ) {
		$navClicked = isset( $_GET['pagina'] );
		if ($navClicked) {
			$fileToLoad = $_GET['pagina'];
		} else {
			$fileToLoad = "swipen";}
		$paginaData->content .= include_once "controllers/$fileToLoad.php";
		$paginaData->embeddedStyle = "
			<style> nav a[href *= '?page=$fileToLoad']{
				color: steelblue; }
			</style>";
} else {
		$paginaData->content = include_once "controllers/swipen.php";
		$navClicked = isset( $_GET['pagina'] );
		if ($navClicked) {
			$fileToLoad = $_GET['pagina'];
		} else {
			$fileToLoad = "welkom";}
		$paginaData->content = include_once "controllers/$fileToLoad.php";
}

$pagina = include_once "views/pagina.php";
echo $pagina;
