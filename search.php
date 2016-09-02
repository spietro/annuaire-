<title>recherche</title>

<?php
$recherche=$_POST['recherche'];
require "connect.php";
$query = "SELECT id FROM structure WHERE nom=$recherche LIKE "%result%" ORDER BY $recherche";
$result = mysqli_query($link,$query);
while($line = mysqli_fetch_array($result)) {
  echo $line["id"] . "-" . $line["nom"] . "<br>";
}
if(isset($_POST['q'])){
  $qr=$_GET['q'];
  print_r($_POST);
  $s=explode(" ",$qr  );
  $sql="SELECT * FROM sctructure";
  $i=0;
  print_r($s);
  foreach($s as $mot){
    if ( strlen($mot)<3) {
      if($i==0){
        $sql.=" WHERE ";
      }
      else{
        $sql.=" OR ";
      }
      $sql.="sctructure LIKE '%$mot%'";
      $si++;
    }

  }

  echo "pas de recherche";
}
 // if(isset($_GET[submit]))
 // {
 //   $search = mysql_real_escape_string(htmlentities(trim)$_GET['search'])));
 //   if(empty($search))
 //   {
 //    $error[] ="veuillez saisir une recherche";
 //  } else if(strlen($search)<3)
 //  {
 //    $error[]= "Veuillez saisir une recherche qui dépasse les 3 caractéres";
 //  }
 //  foreach ($error as $error) { echo $error."<br>";}
 // }
?>
