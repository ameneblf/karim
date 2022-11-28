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
if (isset($_POST["rns"])) {
  $search = $_POST["rns"];
  $stmt = $conn->prepare("select * FROM `societe` where registre LIKE CONCAT('%',?,'%') OR Nom Like CONCAT('%',?,'%') OR sigle Like CONCAT('%',?,'%')");
  $stmt->bind_param("sss", $search, $search, $search);

  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $code_region = $row["region"];
      $query1 = "SELECT * FROM `region` WHERE `code` = '" . $code_region . "'";
      $res1 = mysqli_query($conn, $query1);
      $row1 = mysqli_fetch_assoc($res1);
      echo "
      <tr>
        <td><strong>" . $row["registre"] . "</strong></td>
                                  <td>" . $row["Nom"] . "</td>
                                  <td>" . $row["sigle"] . "</td>
                                  <td>" . $row["Tel"] . "</td>
                                  <td>" . $row["Fax"] . "</td>
                                  <td>" . $row["adresse"] . "</td>
                                  <td>" . $row["email"] . "</td>
                                  <td>" . $row["datecration"] . "</td>
                                  <td>" . $row1["nom"] . "</td>
                                  <td>" . $row["viller"] . "</td>";
      if ($_COOKIE['type_user'] == 1) {
        echo "<td>
                                            <div class=\"dropdown\">
                                              <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                              </button>
                                              <div class=\"dropdown-menu\">
                                                <a style=\"color: burlywood;\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["registre"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Éditer</a>
                                                <a style=\"color: brown;\" class=\"dropdown-item\" href=Entreprises.php?id_del=" . $row["registre"] . "><i class=\"bx bx-trash me-1\"></i> supprimer</a>
                                                <a style=\"color: currentcolor;\" class=\"dropdown-item\" href=Entreprise.php?id_affiche=" . $row["registre"] . "><i class=\"bx bx-note me-1\"></i> affiche</a>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>";
      }
      if ($_COOKIE['type_user'] == 2) {
        echo "<td>
                                            <div class=\"dropdown\">
                                              <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                              </button>
                                              <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["registre"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                                <a class=\"dropdown-item\" href=Entreprises.php?id_affiche=" . $row["registre"] . "><i class=\"bx bx-note me-1\"></i> affiche</a>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>";
      }
    }
  }
}
if (isset($_GET["filterr"])) {
  $regionsearch = $_GET["regions"];
  $v_search = $_GET["vsearch"];
  $stmt = $conn->prepare("select * FROM `societe` WHERE region = $regionsearch AND ville = '$v_search' OR `region` = $regionsearch");
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $code_region = $row["region"];
      $query1 = "SELECT * FROM `region` WHERE `code` = '" . $code_region . "'";
      $res1 = mysqli_query($conn, $query1);
      $row1 = mysqli_fetch_assoc($res1);
      echo "
      <tr>
        <td><strong>" . $row["registre"] . "</strong></td>
                                  <td>" . $row["Nom"] . "</td>
                                  <td>" . $row["sigle"] . "</td>
                                  <td>" . $row["Tel"] . "</td>
                                  <td>" . $row["Fax"] . "</td>
                                  <td>" . $row["adresse"] . "</td>
                                  <td>" . $row["email"] . "</td>
                                  <td>" . $row["datecration"] . "</td>
                                  <td>" . $row1["nom"] . "</td>
                                  <td>" . $row["viller"] . "</td>";
      if ($_COOKIE['type_user'] == 1) {
        echo "<td>
                                            <div class=\"dropdown\">
                                              <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                              </button>
                                              <div class=\"dropdown-menu\">
                                                <a style=\"color: burlywood;\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["registre"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Éditer</a>
                                                <a style=\"color: brown;\" class=\"dropdown-item\" href=Entreprises.php?id_del=" . $row["registre"] . "><i class=\"bx bx-trash me-1\"></i> supprimer</a>
                                                <a style=\"color: currentcolor;\" class=\"dropdown-item\" href=Entreprise.php?id_affiche=" . $row["registre"] . "><i class=\"bx bx-note me-1\"></i> affiche</a>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>";
      }
      if ($_COOKIE['type_user'] == 2) {
        echo "<td>
                                            <div class=\"dropdown\">
                                              <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                              </button>
                                              <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["registre"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                                <a class=\"dropdown-item\" href=Entreprises.php?id_affiche=" . $row["registre"] . "><i class=\"bx bx-note me-1\"></i> affiche</a>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>";
      }
    }
  } else {
    $stmt = $conn->prepare("select * FROM `societe`");
  }
} else {
  $stmt = $conn->prepare("select * FROM `societe`");
}
