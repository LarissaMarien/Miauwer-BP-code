<?php
return "<!DOCTYPE html>
<html>
<head>
<title>$paginaData->title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
<link href='https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap' rel='stylesheet'>
<link rel='stylesheet' type='text/css' href='css/reset.css'>
<link rel='icon' href='../assets/icons/Logo-icon.png'>
$paginaData->css
$paginaData->embeddedStyle
</head>
<body>
  <div class='kader'>
    $paginaData->content
  </div>
  $paginaData->js

</body>
</html>";
