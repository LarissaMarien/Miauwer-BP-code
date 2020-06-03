<?php

$pagina = "liked";

include_once "models/Katten_Table.class.php";
include_once "models/Gebruikerkat_Table.class.php";

$kattenTable = new Katten_Table($db);
$gebkatTable = new Gebruikerkat_Table($db);

$actie = isset($_GET['actie']);


if ($actie) {
    $actie = $_GET['actie'];
    if ($actie == 'bekijk') {
      $kat = $kattenTable->geefEnkele($_GET['id']);
      $output = include_once "views/katdetail-nolike.php";
      return $output;
    } else if ($actie == 'contact') {
      $kat = $kattenTable->geefEnkele($_GET['id']);
      $output = include_once "views/contact-pag.php";
      return $output;
    } else if ($actie == 'verwijder') {
      $kat_id = $_GET['id'];
      $gebruikerId = $_SESSION['gebruiker_id'];
    	$gebkatTable->verwijder($gebruikerId, $kat_id);
      header('Location: index.php?pagina=liked');
    } else {
      header('Location: index.php');
    }
} else {
  $gebruikerId = $_SESSION['gebruiker_id'];
  $alleGebkatten = $gebkatTable->likedinner($gebruikerId);
  $output = include_once "views/liked-pag.php";
}
    return $output;

?>
