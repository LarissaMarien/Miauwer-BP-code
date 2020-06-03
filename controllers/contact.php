<?php
$pagina = "contact";

include_once "models/Katten_Table.class.php";
$kattenTable = new Katten_Table($db);

include_once "models/Gebruiker_Table.class.php";
$gebruikerTable = new Gebruiker_Table($db);

$gebruikerId = $_SESSION['gebruiker_id'];

$gebruiker = $gebruikerTable->geefEnkele($gebruikerId);

$kat = $kattenTable->geefEnkele($_GET['id']);

$toonview = include_once "views/contact-pag.php";
return $toonview

?>
