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
if (isset($_GET["secteur"])) {
    $radio = $_GET["radio"];
    if ($radio == 1) {
        $secteur = $_GET["secteur"];
        $query = "select * FROM `classe` where type_direction = 'R' and ministere = 'E' and secteur = '$secteur' AND code!='C5'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
            echo "<option value=\" 0 \">Sélection par défaut</option>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
            }
        } else {
            echo "<option value=\" 0 \">Sélection par défaut</option>";
        }
    }
    else {
        $secteur = $_GET["secteur"];
        $query = "select * FROM `classe` where type_direction = 'R' and ministere = 'E' and secteur = '$secteur'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
            echo "<option value=\" 0 \">Sélection par défaut</option>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
            }
        } else {
            echo "<option value=\" 0 \">Sélection par défaut</option>";
        }
    }
}
if (isset($_GET["secteurN"])) {
    $radio = $_GET["radio"];
    $secteurN = $_GET["secteurN"];
    $query = "select * FROM `classe` where type_direction = 'N' and ministere = 'E' and secteur = '$secteurN'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}



?>