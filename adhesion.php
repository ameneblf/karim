<?php
session_start();
include_once('db/connexion.php');
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
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Adhésion</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/Asset 1.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="dashboard.php" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">bienvenue</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item ">
            <a href="dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Tableau de bord</div>
            </a>
          </li>
          <!-- Cards -->
          <li class="menu-item">
            <a href="Entreprises.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-buildings"></i>

              <div data-i18n="Basic">Gestion d'Entreprises</div>
            </a>
          </li>
          <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-shield-alt-2"></i>
                            <div data-i18n="Account Settings">Qualifications et Classifications</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Account">test1</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Notifications">Ministere de l'Equipement</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="Demande.php" class="menu-link">
                                            <div data-i18n="Account">Demande des Qualification et Classes</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="table_com.php" class="menu-link">
                                            <div data-i18n="Account">Etude de la Comande</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">OPERATIONS</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-cog"></i>
              <div data-i18n="Account Settings">Operation</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item active">
                <a href="adhesion.php" class="menu-link">
                  <div data-i18n="Account">Adhésion</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cotisation.php" class="menu-link">
                  <div data-i18n="Notifications">Cotisation</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Connections">test3</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Forms & Tables -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de setting</span></li>
          <!-- Tables -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-key"></i>
              <div data-i18n="Account Settings">Paramétres</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="class/region.php" class="menu-link">
                  <div data-i18n="Account">Région</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="class/ville.php" class="menu-link">
                  <div data-i18n="Notifications">Ville</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Connections">Forme juridique</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="class/secteurs.php" class="menu-link">
                  <div data-i18n="Connections">Gestion des secteurs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="class/GesClasses.php" class="menu-link">
                  <div data-i18n="Connections">Gestion des Classes</div>
                </a>
              </li>
              <li class="menu-item ">
                <a href="class/GesQulif.php" class="menu-link">
                  <div data-i18n="Connections">Gestion des Qualifications</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search 
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
               /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/55.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/55.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">
                            <?php echo $_COOKIE['nom']; ?>
                          </span>
                          <small class="text-muted">
                            <?php
                            if ($_COOKIE['type_user'] == 1) {
                              echo "admin";
                            }
                            if ($_COOKIE['type_user'] == 2) {
                              echo "emp";
                            }
                            if ($_COOKIE['type_user'] == 3) {
                              echo "xxx";
                            }

                            ?>
                          </small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">Mon profil</span>
                    </a>
                  </li>
                  <?php
                  if ($_COOKIE['type_user'] == 1) {
                    echo "<li>
                                <a class=\"dropdown-item\" href=\"setting.php\">
                                <i class=\"bx bx-cog me-2\"></i>
                                <span class=\"align-middle\"> Settings</span>
                                </a>
                            </li>";
                  }
                  ?>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="logout.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->
        <script>
          $(document).ready(function () {
            $('#ville').change(function () {
              var regionID = $('#region').val();
              var villeID = $('#ville').val();
              if (villeID) {
                $.get(
                  "societeparregion.php", {
                  region_id: regionID,
                  ville_id: villeID
                },
                  function (data) {
                    $('#Entreprise').html(data);
                  }
                );
              } else {
                $("#Entreprise").empty();
              }
            });
            $('#region').change(function () {
              var regionID = $(this).val();
              if (regionID) {
                $.get(
                  "ajax.php", {
                  region_id: regionID
                },
                  function (data) {
                    $('#ville').html(data);
                  }
                );
              } else {
                $("#ville").empty();
              }
            });

          });
        </script>
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card row g-2">
              <div class="input-group input-group-merge col mb-0" style="margin-bottom: -5px !important;">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input id="search" type="text" class="form-control" placeholder="Recherche par nom | code registre"
                  aria-label="Search..." aria-describedby="basic-addon-search31">
              </div>
              <div class="row g-2" style="padding-bottom: calc(var(--bs-gutter-x) * 0.7);">
                <script>
                  $(document).ready(function () {
                    $("#search").keyup(function () {
                      var search = $("#search").val()
                      $.ajax({
                        url: 'recherchad.php',
                        method: 'post',
                        data: {
                          adr: search
                        },
                        success: function (response) {
                          $('#tabledata').html(response);
                        }
                      });
                    });
                    // $(document).ready(function() {
                    //   $("#date_fin").change(function() {
                    //     var datedebut = $("#date_debut").val();
                    //     var datefin = $("#date_fin").val();
                    //     $.ajax({
                    //       url: 'recherchad.php',
                    //       method: 'get',
                    //       data: {
                    //         rechpardat: '',
                    //         datedebut: datedebut,
                    //         datefin: datefin
                    //       },
                    //       success: function(response) {
                    //         $('#tabledata').html(response);
                    //         console.log(response);
                    //       }
                    //     });
                    //     console.log(datedebut + " " + datefin);
                    //   });
                    // });
                  });
                </script>
                <!-- <div class="mb-2 col">
                  <label for="html5-date-input" class="mb-2 col col-form-label">Date debut</label>
                  <div class="mb-2 col">
                    <input class="form-control" type="date" value="2021-06-18" id="date_debut">
                  </div>
                </div>
                <div class="mb-2 col">
                  <label for="html5-date-input" class="mb-2 col col-form-label">Date fin</label>
                  <div class="mb-2 col">
                    <input class="form-control" type="date" value="2021-06-18" id="date_fin">
                  </div>
                </div> -->
              </div>
            </div>
            <br>
            <div class="card">
              <div class="row">
                <div class="col-md-6">
                  <h5 class="card-header"> <strong>Adhésion</strong></h5>
                </div>
                <div class="col-md-4 "
                  style="margin-left: auto;text-align-last: right; align-self: center; padding-right: calc(var(--bs-gutter-x) * 0.9);">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary bx bx-message-square-add" data-bs-toggle="modal"
                    data-bs-target="#modaladd">
                  </button>
                </div>
              </div>
              <div class="modal fade " id="modaladd" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;"
                  role="document">
                  <form action="adhesion.php" method="POST">
                    <div class="modal-content container-xxl">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Add Adhésion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="card-body">
                        <div class="row g-2">
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-map-alt">Région</label>
                            <div class="input-group input-group-phone">
                              <span id="basic-icon-map-alt" class="input-group-text"><i
                                  class="bx bx-map-alt"></i></span>
                              <select id="region" name="region" class="form-select">
                                <option value="0">Sélection par défaut</option>
                                <?php
                                $sql1 = "SELECT * FROM `region`";
                                $region = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($region) > 0) {
                                  while ($row = mysqli_fetch_assoc($region)) {
                                    echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                  }
                                }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-map">Ville</label>
                            <div class="input-group input-group-phone">
                              <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                              <select id="ville" required name="ville" class="form-select">
                                <option value="0">Sélection par défaut</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-0">
                          <label class="form-label" for="basic-icon-default-phone">Nom d'Entreprise</label>
                          <div class="input-group input-group-phone">
                            <span id="basic-icon-rename" class="input-group-text"><i class="bx bx-rename"></i></span>
                            <select id="Entreprise" required name="Entreprise" class="form-select">
                              <option value="0">Sélection par défaut</option>
                            </select>
                          </div>
                        </div>

                        <div class="row g-2">
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Numéro régional</label>
                            <div class="input-group input-code">
                              <span id="basic-icon-code" class="input-group-text"><i
                                  class="bx bx-trending-up"></i></span>
                              <input type="number" max="10000" min="0" required name="numreg" id="basic-icon-code"
                                class="form-control" placeholder="XXXXX" aria-label="numreg"
                                aria-describedby="basic-icon-default-numreg">
                            </div>
                          </div>
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-note">Numéro national</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-objects-horizontal-left" class="input-group-text"><i
                                  class="bx bx-trending-up"></i></span>
                              <input type="number" max="10000" min="0" name="numnat" id="basic-icon-code"
                                class="form-control" placeholder="XXXXX" aria-label="numreg"
                                aria-describedby="basic-icon-default-numreg">
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-note">date d'adhésion</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-note" class="input-group-text"><i
                                class="bx bx-calendar"></i></span>
                            <input class="form-control" name="date_ad" required type="date" value="2022-10-25"
                              id="html5-datetime-local-input">
                          </div>
                        </div>
                        <button type="submit" name="addadhesion" class="btn btn-primary">ajouter</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <?php
          if (isset($_POST["upadhesion"])) {
            $id = $_POST["registre"];
            $numreg = $_POST["numreg"];
            $numnat = $_POST["numnat"];
            $date_ad = $_POST["date_ad"];
            $entreprise = $_POST["entreprise"];
            $queryup = "UPDATE `adhesion` SET `numreg`=$numreg,`numnat`=$numnat,`date_ad`='$date_ad' WHERE `registre`=$id";
            $conn->query($queryup);
          }
          if (isset($_GET["id_del"])) {
            $id = $_GET["id_del"];
            $query = "DELETE FROM `adhesion` WHERE `registre`='$id'";
            $conn->query($query);
            $upquery = "UPDATE `societe` SET `adheree` = 'nad' WHERE `societe`.`registre` = $id";
            if ($conn->query($upquery) === TRUE) {
            } else {
              echo "Error: " . $upquery . "<br>" . $conn->error;
            }
            ;
          }
          ?>
          <div class="table-responsive text-nowrap">
            <?php
            if (isset($_POST["addadhesion"])) {
              $id = $_POST["Entreprise"];
              $numreg = $_POST["numreg"];
              $numnat = $_POST["numnat"];
              $date_ad = $_POST["date_ad"];
              $res = $conn->query("SELECT Nom FROM `societe` WHERE `registre`=$id");
              $row = mysqli_fetch_row($res);
              $entreprise = $row[0];
              if ($numreg < $numnat) {
                $query = "INSERT INTO `adhesion`(`registre`, `entreprise`, `numreg`, `numnat`, `date_ad`) VALUES ('$id','$entreprise','$numreg','$numnat','$date_ad')";
                if ($conn->query($query) === TRUE) {
                  $upquery = "UPDATE `societe` SET `adheree` = 'ad' WHERE `societe`.`registre` = '" . $_POST["Entreprise"] . "'";
                  if ($conn->query($upquery) === TRUE) {
                  } else {
                    echo "Error: " . $upquery . "<br>" . $conn->error;
                  }
                  ;
                } else {
                  echo "Error: " . $query . "<br>" . $conn->error;
                }
                ;
              } else {
              }
            }
            ?>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>registre</th>
                  <th>Entreprise</th>
                  <th>Numéro régional</th>
                  <th>Numéro national</th>
                  <th>date d'adhésion</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0" id="tabledata">
                <?php
                $sql = "SELECT * FROM `adhesion`";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    echo "
                          <tr>
                            <td><strong>" . $row["registre"] . "</strong></td>
                            <td>" . $row["entreprise"] . "</td>
                            <td>" . $row["numreg"] . "</td>
                            <td>" . $row["numnat"] . "</td>
                            <td>" . $row["date_ad"] . "</td>";
                    if ($_COOKIE['type_user'] == 1) {
                      echo "<td>
                              <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                  <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                  <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#modal" . $row["registre"] . "\" href=adhesion.php?id_edhesion=" . $row["registre"] . "><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                  <a class=\"dropdown-item\" href=adhesion.php?id_del=" . $row["registre"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>";
                    } else {
                      echo "<td>
                              NULL
                            </td>
                          </tr>";
                    }
                    echo "<div class=\"modal fade\" id=\"modal" . $row["registre"] . "\" tabindex=\"-1\" style=\"display: none;\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
              <form action=\"\" method=\"POST\">
              <div class=\"modal-content container-xxl\">
                      <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"modalCenterTitle\">Edite l'adhésion de " . $row["entreprise"] . "</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                      </div>
                      <div class=\"card-body\">
                        <div class=\"row g-2\">
                          <div class=\"col mb-0\" style=\" display:none\">
                            <label class=\"form-label\" for=\"basic-icon-default-company\">entreprise</label>
                            <div class=\"input-group input-code\">
                              <span id=\"basic-icon-code\" class=\"input-group-text\"></span>
                              <input type=\"text\"  value=" . $row["entreprise"] . " required name=\"entreprise\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                          <div class=\"col mb-0\" style=\" display:none\">
                            <label class=\"form-label\" for=\"basic-icon-default-company\">registre</label>
                            <div class=\"input-group input-code\">
                              <span id=\"basic-icon-code\" class=\"input-group-text\"></span>
                              <input type=\"number\" value=" . $row["registre"] . " required name=\"registre\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                          <div class=\"col mb-0\">
                            <label class=\"form-label\" for=\"basic-icon-default-company\">Numéro régional</label>
                            <div class=\"input-group input-code\">
                              <span id=\"basic-icon-code\" class=\"input-group-text\"><i class=\"bx bx-trending-up\"></i></span>
                              <input type=\"number\" max=\"10000\" min=\"0\" value=" . $row["numreg"] . " required name=\"numreg\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                          <div class=\"col mb-0\">
                            <label class=\"form-label\" for=\"basic-icon-default-note\">Numéro national</label>
                            <div class=\"input-group input-group-merge\">
                              <span id=\"basic-icon-default-objects-horizontal-left\" class=\"input-group-text\"><i class=\"bx bx-trending-up\"></i></span>
                              <input type=\"number\" max=\"10000\" min=\"0\" value=" . $row["numnat"] . " name=\"numnat\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                        </div>
                        <div class=\"mb-3\">
                          <label class=\"form-label\" for=\"basic-icon-default-note\">date d'adhésion</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-note\" class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                            <input class=\"form-control\" name=\"date_ad\" value=" . $row["date_ad"] . " required type=\"date\" value=\"\" id=\"html5-datetime-local-input\">
                          </div>
                        </div>
                  <button type=\"submit\" name=\"upadhesion\" class=\"btn btn-primary\">éditer</button>
            </form>
              </div>
            </div>";
                  }
                }

                ?>
              </tbody>

            </table>

          </div>
        </div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>