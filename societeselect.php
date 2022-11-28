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

if (isset($_GET["city"])) {
  $region_id = $_GET["region"];
  $city = $_GET["city"];
  $query = "select * FROM `societe` where region = '$region_id' and ville = '$city'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value=" . $row["registre"] . ">" . $row["Nom"] . "</option>";
    }
  } else {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
  }
}

if (isset($_GET["Secteur"])) {
  $Secteur = $_GET["Secteur"];
  $query = "SELECT * FROM `qualificationsec`  where Codesec = '$Secteur'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr id=" . $row["Code"] . ">
          <td><input id=\"checkbox1\" class=\"form-check-input\"   type=\"checkbox\" value=" . $row["Code"] . " name=\"qualif[]\"> </td>
          <td>" . $row["nom"] . "</td>
          <td>";
      $query1 = "select * FROM `titre`";
      $res1 = mysqli_query($conn, $query1);
      if (mysqli_num_rows($res1) > 0) {
        while ($row1 = mysqli_fetch_array($res1)) {
          echo "
                <div class=\"form-check form-check-inline mt-3\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"titrev[" . $row["Code"] . "]\" id=\"inlineRadio1\"
                      value=" . $row1["Code"] . ">
                  <label class=\"form-check-label\" for=\"inlineRadio1\">" . $row1["nom"] . "</label>
                </div>";
        }
      }
      echo "</td></tr>";
    }
  } else {

  }
}
if (isset($_GET["Secteurcheck"])) {
  $Secteurcheck = $_GET["Secteurcheck"];
  $query = "SELECT * FROM `secteur`  where code = '$Secteurcheck'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $check = mysqli_fetch_row($res);
    if ($check[4]==1) {
      echo "<label class=\"form-label\" for=\"Fonction\">En Fonction du</label><br>
      <div class=\"form-check form-check-inline mt-3\">
          <input class=\"form-check-input\" type=\"radio\" name=\"Fonction\" id=\"inlineRadio1\"
              value=\"0\">
          <label class=\"form-check-label\" for=\"inlineRadio1\">Chiffre d'affaire</label>
      </div>
      <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"Fonction\" id=\"inlineRadio2\"
              value=\"1\">
          <label class=\"form-check-label\" for=\"inlineRadio2\">Capital social et du Chiffre
              d'affaire</label>
      </div>";
    }
    
  } else {

  }
}
if (isset($_GET["nat_d"])) {
  $nat_d = $_GET["nat_d"];
  $societe = $_GET["societe"];
  $Comand = "SELECT * FROM demand where register ='$societe' and nature_demande = '$nat_d'";
  $res = mysqli_query($conn, $Comand);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $id = $row["id_demand"];
      echo "<tr data-target=\"date\" id=" . $row["id_demand"] . ">
        <td>" . $row["date"] . "</td>";

      $etat = $row["etat_demande"];
      $etat_demande = "select type_demande FROM `etat_demande` where code='$etat'";
      $resretat = mysqli_query($conn, $etat_demande);
      if (mysqli_num_rows($resretat) > 0) {
        while ($row1 = mysqli_fetch_array($resretat)) {
          if ($etat == 'EN') {
            echo "<td><span class=\"badge bg-label-warning me-1\">" . $row1["type_demande"] . "</span></td>";
          }
          if ($etat == 'RF') {
            echo "<td><span class=\"badge bg-label-danger me-1\">" . $row1["type_demande"] . "</span></td>";
          }
          if ($etat == 'VD') {
            echo "<td><span class=\"badge bg-label-success me-1\">" . $row1["type_demande"] . "</span></td>";
          }

        }
      }
      $cat = $row["categ"];
      $qcat = "select nom FROM `categ` where code='$cat'";
      $rescat = mysqli_query($conn, $qcat);
      if (mysqli_num_rows($rescat) > 0) {
        while ($row1 = mysqli_fetch_array($rescat)) {
          echo "<td>" . $row1["nom"] . "</td>";
        }
      }
      if ($row["Fonction"]==0) {
        echo "<td>Chiffre d'affaire</td>";
      }if ($row["Fonction"]==1) {
        echo "<td>Capital social et du Chiffre d'affaire</td>";
      }
      
      // echo "<td>";
      // $query1 = "select * FROM `qualid_demand` where id_demand=$id";
      // $res1 = mysqli_query($conn, $query1);
      // if (mysqli_num_rows($res1) > 0) {
      //   while ($row1 = mysqli_fetch_array($res1)) {
      //     if ($row1["titre"] == 1) {
      //       echo $row1["Qualif"] . " : Provisoire <br>";
      //     }
      //     if ($row1["titre"] == 2) {
      //       echo $row1["Qualif"] . " : Définitive <br>";
      //     }
      //   }
      // }
      //  "</td>
      echo "<td><div class=\"dropdown\">
            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
              <i class=\"bx bx-dots-vertical-rounded\"></i>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-date=" . $row["date"] . " data-id=" . $row["register"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
              <a class=\"dropdown-item\" href=GesQulif.php?id_del=" . $row["id_demand"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
            </div>
        </div> </td>";

    echo "</tr>";
    }
  } else {
  }
} 
if (isset($_GET["numcertif"])) {
  $numcertif=$_GET["numcertif"];
  $query = "SELECT numcertif FROM `dossiersociete`  where registre = '$numcertif'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo $row["numcertif"];
    }
  }
}
else {
  
}