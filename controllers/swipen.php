<?php

$pagina = "swipen";

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
}

if ($actie) {
				$actie = $_GET['actie'];
				if ($actie  === "bekijk") {
					$kat = $kattenTable->geefEnkele($_GET['id']);
				  $itemView = include_once "views/katdetail-nolike.php";
				  return $itemView;
				} else if ($actie === 'volgende') {
					$kat_id = $_GET['id'];
					$kat = $kattenTable->geefEnkele($kat_id);
					$kat_next = $kat_id+1;
					$kat_back = $kat_id-1;
					$output = include_once "views/swipe-pag.php";
					return $output;
				} else if ($actie === 'terug') {
					$kat_id = $_GET['id'];
					$kat = $kattenTable->geefEnkele($kat_id);
					$kat_next = $kat_id+1;
					$kat_back = $kat_id-1;
					$output = include_once "views/swipe-pag.php";
					return $output;
				}
		} else {
			$kat = 1;
			$kat_next = $kat+1;
			$kat_back = $kat-1;
			$kat = $kattenTable->geefEnkele($kat);
			$output = include_once "views/swipe-pag.php";
    }	return $output;

?>
