<?php

include_once "models/Gebruiker_Table.class.php";
$loginGebruiker = isset( $_POST['login-gebruiker'] );
if ($loginGebruiker) {
    $email = $_POST['email'];
    $paswoord = $_POST['paswoord'];
		$gebruikerTable = new Gebruiker_Table($db);
		$gebruiker = $gebruikerTable->checkCredentials($email,$paswoord);
		$sessie->login($gebruiker->gebruikersnaam,$gebruiker->id);
		header('Location: index.php');
} else {
    $toonView = include_once "views/login-pag.php";
    return $toonView;
}

?>
