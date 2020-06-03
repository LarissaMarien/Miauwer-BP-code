<?php

$pagina = "overzicht-omganghonden";

$titel = "Wij kunnen om met honden";

include_once "models/Katten_Table.class.php";
include_once "models/Gebruikerkat_Table.class.php";
$kattenTable = new Katten_Table($db);
$gebkatTable = new Gebruikerkat_Table($db);

$gebruikerId = $_SESSION['gebruiker_id'];

$actie = isset($_GET['actie']);

$formDataAanmaken = isset($_POST['like-kat']);
if ($formDataAanmaken) {
	$gebruiker_id = $_POST['gebruikerid'];
	$liked = 1;
	$kat_id = $_POST['katid'];
	$gebkatTable->likekat($gebruiker_id,$kat_id,$liked);
	/*echo "geliked";*/
}

    if ($actie == 'bekijk') {
      $kat = $kattenTable->geefEnkele($_GET['id']);
      $output = include_once "views/katdetail.php";
      return $output;
    } else {
      $alleKatten = $kattenTable->filteromganghonden();
      $output = include_once "views/overzicht-pag-filter.php";
      return $output;
    }
?>
