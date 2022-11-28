<?php

session_start();
include('db/connexion.php');
/* if($_SESSION['loggedin'] = TRUE){
     echo $_SESSION['name'];
     echo $_SESSION['id'] ;
   }else{
     echo "echec";
   }*/
if (!isset($_SESSION['loggedin'])) {
  header('refresh:0;url=404.php'); //2 s
  exit();
}

if (isset($_GET["region_id"])) {
  $region_id = $_GET["region_id"];
  $query = "select * FROM `ville` where region = $region_id ";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
    }
  } else {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
  }
} else {
  echo "error";
}


?>
<?php
if (isset($_GET["addrespon"])) {
  $fonction = $_GET["fonction"];
  $register = $_GET["register"];
  $emailfonction = $_GET["emailfonction"];
  $telefon2 = $_GET["telefon2"];
  $telefon = $_GET["telefon"];
  $nom_prenom = $_GET["nom_prenom"];
  $query = "INSERT INTO `responsable`( `nom_prenom`, `fonction`, `tele_responsqble`, `tele_resp`, `mail`, `registre_societe`) VALUES ('$nom_prenom','$fonction','$telefon','$telefon','$emailfonction','$register') ";
  $res = mysqli_query($conn, $query);
  $conn->query($res);
} else {
  echo "error";
}

?>