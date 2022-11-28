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
if (isset($_GET["ville_id"])) {
    $region_id = $_GET["region_id"];
    $ville_id = $_GET["ville_id"];
    $query = "select * FROM `societe` where region = $region_id and adheree LIKE 'nad' and ville LIKE '$ville_id'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_array($res)) {
        echo "<option value= ". $row["registre"] ." >" . $row["Nom"] . "</option>";
      }
    } else {
      echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
  } else {
    echo "error";

}

?>