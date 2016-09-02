<?php
// mysql_connect("localhost","root","pietro14");
$link = mysqli_connect('localhost', 'root', 'pietro14','pietro');
if (!$link) {
  die('Connexion impossible : ' . mysql_error());
} else {
  echo 'Connecté correctement';
}
?>
