<?php

$pagina = "profiel";

include_once "models/Gebruiker_Table.class.php";
$gebruikerTable = new Gebruiker_Table($db);
$uitloggen = isset($_POST['logout']);
$gebruikerId = $_SESSION['gebruiker_id'];

$actie = isset($_GET['actie']);

function afbeeldingOpladen(){
  $inputName =$_POST['naam'] . $_POST['voornaam'] ."-new.jpg";
  $imageName =str_ireplace(' ','-',$inputName);
  include_once "models/Oplader.class.php";
  $oplader = new Oplader( "image-data" );
  $oplader->saveIn("profileimages");
  $fileUploaded = $oplader->save($imageName);
  if ($fileUploaded) {
      $out = "nieuw bestand opgeladen naam is $imageName";
  } else {
      $out = "er is iets foutgelopen";
  }
}

if ($uitloggen){
	$sessie->logout();
	header('Location: index.php');
} else if ($actie == 'wijzig') {
      $gebruiker = $gebruikerTable->geefEnkele($gebruikerId);
      $output = include_once "views/profiel-wijzig-pag.php";
} else {

	$formDataWijzigen = isset($_POST['wijzig']);
		if ($formDataWijzigen) {
			$id = $_POST['id'];
			$voornaam = $_POST['voornaam'];
			$naam = $_POST['naam'];
	    $geboortedatum = $_POST['geboortedatum'];
	    $beroep = $_POST['beroep'];
	    $gezinsleden = $_POST['gezinsleden'];
	    $kinderen = $_POST['kinderen'];
	    $allergisch = $_POST['allergisch'];
	    $woning = $_POST['woning'];
	    $tuin = $_POST['tuin'];
	    $omgeving = $_POST['omgeving'];
	    $verblijf = $_POST['verblijf'];
	    $kattengehad = $_POST['kattengehad'];
	    $aantalkatten = $_POST['aantalkatten'];
	    $aantalhonden = $_POST['aantalhonden'];
	    $aantalandere = $_POST['aantalandere'];
			$inputName =$_POST['naam']. $_POST['voornaam'] ."-new.jpg";
	    $imageName =str_ireplace(' ','-',$inputName);
	    $email = $_POST['email'];
	    $paswoord = $_POST['paswoord'];
			$gebruikerTable->wijzig($id,$voornaam,$naam,$geboortedatum,$beroep,$gezinsleden,$kinderen,$allergisch,$woning,$tuin,$omgeving,$verblijf,$kattengehad,$aantalkatten,$aantalhonden,$aantalandere,$imageName,$email,$paswoord);
			$output = afbeeldingOpladen();
		}
		$gebruiker = $gebruikerTable->geefEnkele($gebruikerId);
		$output = include_once "views/profiel-pag.php";
    }
		return $output;


?>
