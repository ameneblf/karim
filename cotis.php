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
if (isset($_GET["cotisa"])) {
    $cotis = $_GET["cotisa"];
    $region_id = $_GET["region_id"];
    $ville_id = $_GET["ville_id"];
    $query = "select * FROM `societe` where region = $region_id and adheree LIKE '$cotis' and ville LIKE '$ville_id'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=\"" . $row["registre"] ."\">" . $row["Nom"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}
if (isset($_GET["date"])) {
    $Entreprise=$_GET["registre"];
    $checkco = "select * from cotis  where registre =$Entreprise order by ANNEE desc";
    $datedebu;
    $datefin = date("Y");
    $resul = mysqli_query($conn, $checkco);
    if (mysqli_num_rows($resul) == 0) {
        $checkco = "select year(date_ad) from adhesion where registre =$Entreprise";
        $resul = mysqli_query($conn, $checkco);
        $datedebu = mysqli_fetch_row($resul);
        $datedebu = $datedebu[0];
    } else {
        $checkco = "SELECT max(ANNEE) FROM cotis where registre =$Entreprise";
        $resul = mysqli_query($conn, $checkco);
        $datedebu = mysqli_fetch_row($resul);
        $datedebu = $datedebu[0]+ 1;
        if ($datedebu==$datefin) {
        for ($i = $datedebu; $i <= $datefin; $i++) {
            echo"<option value=" .$i . ">" .$i . "</option>";
        }
    } 
    }
    
       for ($i = $datedebu; $i <= $datefin; $i++) {
        echo"<option value=" .$i . ">" .$i . "</option>";
   
    }
    
} 