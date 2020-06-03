<?php

include_once "models/Gebruiker_Table.class.php";

/*Functie waarin we de image opslaan in de databank*/
function afbeeldingOpladen(){
  $inputName =$_POST['naam'] .$_POST['voornaam'] .".jpg";
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

$maakGebruiker = isset( $_POST['nieuwe-gebruiker'] );
if($maakGebruiker) {
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
    $inputName =$_POST['naam'] . $_POST['voornaam'] .".jpg";
    $imageName =str_ireplace(' ','-',$inputName);
    $email = $_POST['email'];
    $paswoord = $_POST['paswoord'];
    $gebruikerTable = new Gebruiker_Table($db);
    $gebruikerTable->create($voornaam,$naam,$geboortedatum,$beroep,$gezinsleden,$kinderen,$allergisch,$woning,$tuin,$omgeving,$verblijf,$kattengehad,$aantalkatten,$aantalhonden,$aantalandere,$imageName,$email,$paswoord);
    $output = afbeeldingOpladen();
    header('Location: index.php');
    $gebruiker = $gebruikerTable->checkCredentials($email,$paswoord);
    $sessie->login($gebruiker->gebruikersnaam,$gebruiker->id);

} else {
    $toonView = include_once "views/registratie-pag.php";
    return $toonView;
}
return $output;

?>
