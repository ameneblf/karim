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

if (isset($_GET["national"])) {
  
  
  include "national.php";
}
if (isset($_GET["regionale"])) {
  
  include "regional.php";
  
}

?>