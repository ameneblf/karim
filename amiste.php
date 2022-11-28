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

if (isset($_GET["amnist"])) {
    $Entreprise = $_GET["id_entre"];
    $date=date('Y-M-D');
    $datemin = $_GET["date_min"];
    $datemax = $_GET["date_max"];
    $reff = $_GET["ref"];
    $Lieu;
    $type_pai = "amnistie";
    $banque = "0";
    $nb_cheque = 0;
    $montant = 0;
    for ($i=$datemin; $i <=$datemax ; $i++) {
        $insertcotis = "INSERT INTO `cotis`(`registre`, `dat`, `type_paiement`, `cheque`, `banque`, `montant`, `lieu`, `ANNEE`, `num`) VALUES ($Entreprise,'$date','$type_pai','$nb_cheque','$banque',$montant,'$Lieu',$i,$reff)";
        if ($conn->query($insertcotis) === TRUE) {
        } else {
            echo "Error: " . $insertcotis . "<br>" . $conn->error;
        };
    }
    
}
