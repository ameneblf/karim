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

  <title>Getion d'Entreprises</title>

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
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Bienvenue</span>
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
          <li class="menu-item active">
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
              <li class="menu-item">
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
                                <span class=\"align-middle\">Settings</span>
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

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card row g-2">
              <div class="input-group input-group-merge col mb-0" style="margin-bottom: 7px !important;">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input id="search" type="text" class="form-control"
                  placeholder="Recherche par nom | sigle | code registre" aria-label="Search..."
                  aria-describedby="basic-addon-search31">
              </div>
              <div class="row g-2" style="padding-bottom: calc(var(--bs-gutter-x) * 0.7);">
                <div class="col mb-0">
                  <label class="form-label" for="basic-icon-default-map-alt">Région</label>
                  <div class="input-group input-group-phone">
                    <span id="basic-icon-map-alt" class="input-group-text"><i class="bx bx-map-alt"></i></span>
                    <select id="region2" required="" name="region" class="form-select">
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
                <script>
                  $(document).ready(function () {
                    $('#region2').change(function () {
                      var regionID = $(this).val();
                      if (regionID) {
                        $.get(
                          "ajax.php", {
                          region_id: regionID
                        },
                          function (data) {
                            $('#city').html(data);
                          }
                        );
                      } else {
                        $("#city").empty();
                      }
                    });
                    $('#region2').change(function () {
                      var vsearch = $(this).val();
                      var region = $('#region2').val()

                      $.ajax({
                        url: 'aax.php',
                        method: 'get',
                        data: {
                          filterr: '',
                          vsearch: vsearch,
                          regions: region,
                        },
                        success: function (response) {
                          $('#tabledata').html(response);
                        }
                      });
                      console.log(region + " " + vsearch);
                    });
                    $('#city').change(function () {
                      var vsearch = $(this).val();
                      var region = $('#region2').val()
                      $.ajax({
                        url: 'aax.php',
                        method: 'get',
                        data: {
                          filterr: '',
                          vsearch: vsearch,
                          regions: region,
                        },
                        success: function (response) {
                          $('#tabledata').html(response);
                        }
                      });
                      console.log(region + " " + vsearch);
                    });
                  });
                </script>
                <div class="col mb-0">
                  <label class="form-label" for="basic-icon-default-map">Ville</label>
                  <div class="input-group input-group-phone">
                    <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                    <select id="city" required="" name="ville" class="form-select">
                      <option value="0">Sélection par défaut</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="row">
                <div class="col-md-6">
                  <h5 class="card-header"> <strong>Tableaux des sociétés</strong></h5>
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
                <div class="modal-dialog modal-dialog-centered" style="max-width: 40rem !important; display: block;"
                  role="document">
                  <form action="" method="GET">
                    <div class="modal-content container-xxl">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Ajouter une entreprise</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nom ou raison sociale</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-rename" class="input-group-text"><i class="bx bx-rename"></i></span>
                            <input type="text" required id="basic-icon-default-location-plus" name="nom"
                              class="form-control" placeholder="Nom ou raison sociale" aria-label="Adresse"
                              aria-describedby="basic-icon-default-Adresse"></textarea>
                          </div>
                        </div>
                        <div class="row g-3 ">
                          <!--pattern="(06|05|08|07)[0-9]{8}" -->
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">N° de registre</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-dots-vertical-rounded" class="input-group-text"><i
                                  class="bx bx-dots-vertical-rounded"></i></span>
                              <input type="number" name="registre" max="1000000" min="1" required id="register"
                                class="form-control" placeholder="registre XXXXXXX" aria-label="Telephone"
                                aria-describedby="basic-icon-default-Telephone">
                            </div>
                          </div>
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-user">à</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-map-pin" class="input-group-text"><i
                                  class="bx bx-map-pin"></i></span>
                              <input type="text" required id="basic-icon-default-user" name="viller"
                                class="form-control" placeholder="à" aria-label="Nom"
                                aria-describedby="basic-icon-default-Nom">
                            </div>
                          </div>
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-user">sigle</label>
                            <div class="input-group input-pen">
                              <span id="basic-icon-pen" class="input-group-text"><i class="bx bx-pen"></i></span>
                              <input type="text" id="basic-icon-default-user" name="sigle" class="form-control"
                                placeholder="sigle" aria-label="sigle" aria-describedby="basic-icon-default-Nom">
                            </div>
                          </div>
                        </div>
                        <div class="col mb-0">
                          <label class="form-label" for="basic-icon-default-company">Adresse</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-location-plus" class="input-group-text"><i
                                class="bx bx-location-plus"></i></span>
                            <textarea type="text" required id="basic-icon-default-location-plus" name="Adresse"
                              class="form-control" placeholder="Adresse" aria-label="Adresse"
                              aria-describedby="basic-icon-default-Adresse"></textarea>
                          </div>
                        </div>
                        <div class="row g-2" style="margin-bottom: calc(2.5 * var(--bs-gutter-x));">
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-mail">E-mail 1</label>
                            <div class="input-group input-group-mail">
                              <span id="basic-icon-default-at" class="input-group-text"><i class="bx bx-at"></i></span>
                              <input type="mail" required id="basic-icon-default-at" name="mail" class="form-control"
                                placeholder="john@example.com" aria-label="mail"
                                aria-describedby="basic-icon-default-Adresse">
                            </div>
                          </div>
                          <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-mail">E-mail 2</label>
                            <div class="input-group input-group-mail">
                              <span id="basic-icon-default-at" class="input-group-text"><i class="bx bx-at"></i></span>
                              <input type="mail" id="basic-icon-default-at" name="mail_sec" class="form-control"
                                placeholder="john@example.com" aria-label="mail"
                                aria-describedby="basic-icon-default-Adresse">
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="col-xl-12">
                            <div class="nav-align-top mb-4">
                              <ul class="nav nav-pills mb-3" role="tablist">
                                <li class="nav-item">
                                  <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                    aria-selected="true">
                                    Identification
                                  </button>
                                </li>
                                <li class="nav-item">
                                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                    aria-selected="false">
                                    Contacts
                                  </button>
                                </li>
                                <li class="nav-item">
                                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages"
                                    aria-selected="false">
                                    Ressourses Humaines
                                  </button>
                                </li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-phone">Telephone</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-mobile" class="input-group-text"><i
                                            class="bx bx-mobile"></i></span>
                                        <input type="text" pattern="(06|07|05|08)[0-9]{8}" name="tel" required
                                          id="basic-icon-mobile" class="form-control" placeholder="0XXX-XXX-XXX"
                                          aria-label="Telephone" aria-describedby="basic-icon-default-Telephone">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-phone">Fax</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-default-phone" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                        <input type="text" required pattern="(06|07|05|08)[0-9]{8}" name="fax"
                                          id="basic-icon-phone" class="form-control" placeholder="0XXX-XXX-XXX"
                                          aria-label="Telephone" aria-describedby="basic-icon-default-Telephone">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-map-alt">Région</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-map-alt" class="input-group-text"><i
                                            class="bx bx-map-alt"></i></span>
                                        <select id="region" required name="region" class="form-select">
                                          <option>Sélection par défaut</option>
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
                                    <script type=text/javascript>
                                      $(document).ready(function() {
                                        $('#region').change(function() {
                                          var regionID = $(this).val();
                                          if (regionID) {
                                            $.get(
                                              "ajax.php", {
                                                region_id: regionID
                                              },
                                              function(data) {
                                                $('#ville').html(data);
                                              }
                                            );
                                          } else {
                                            $("#ville").empty();
                                          }
                                        });

                                        $("#addrespon").click(function() {
                                          var fonction = $("#Fonction").val();
                                          var register = $("#register").val();
                                          var emailfonction = $("#emailf").val();
                                          var telefon = $("#telefon").val();
                                          var nom_prenom = $("#nom_prenom").val();
                                          var telefon2 = $("#telefon2").val();

                                          if (register == "") {
                                            $("#alert").css("display", "block");
                                            $("#alert").html("Veuillez écrire le code de registre");
                                          }
                                          if (emailfonction == "") {
                                            $("#alert").css("display", "block");
                                            $("#alert").html("Veuillez écrire l'email");
                                          }
                                          if (telefon == "") {
                                            $("#alert").css("display", "block");
                                            $("#alert").html("Veuillez écrire le numéro téléphone");
                                          }
                                          if (nom_prenom == "") {
                                            $("#alert").css("display", "block");
                                            $("#alert").html("Veuillez écrire le nom et le prenom");
                                          }
                                          if (register && emailfonction && telefon && nom_prenom) {
                                            $("#alert").css("display", "none");
                                            $("#alertdone").css("display", "block");
                                            $("#alertdone").html("L’opération est terminée !!");
                                            console.log(fonction + " " + register + " " + emailfonction + " " + telefon + " " + nom_prenom);
                                            setTimeout(function() {
                                              $("#alertdone").css("display", "none");
                                            }, 1500);
                                            $.get(
                                              "ajax.php", {
                                                addrespon: '',
                                                fonction: fonction,
                                                register: register,
                                                emailfonction: emailfonction,
                                                telefon2: telefon2,
                                                telefon: telefon,
                                                nom_prenom: nom_prenom,
                                              });
                                            $("#Fonction").val("");
                                            $("#emailf").val("");
                                            $("#telefon").val("");
                                            $("#nom_prenom").val("");
                                          }

                                        });
                                      });
                                      $(document).ready(function() {
                                        $("#search").keyup(function() {
                                          var search = $("#search").val()
                                          $.ajax({
                                            url: 'aax.php',
                                            method: 'post',
                                            data: {
                                              rns: search
                                            },
                                            success: function(response) {
                                              $('#tabledata').html(response);
                                            }
                                          });
                                        });
                                      });
                                    </script>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-map">Ville</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-map" class="input-group-text"><i
                                            class="bx bx-map"></i></span>
                                        <select id="ville" required name="ville" class="form-select">

                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-map-alt">Forme Juridique</label>
                                      <div class="input-group input-git-repo-forked">
                                        <span id="basic-icon-git-repo-forked" class="input-group-text"><i
                                            class="bx bx-git-repo-forked"></i></span>
                                        <select id="defaultSelect" required name="juridique" class="form-select">

                                          <?php
                                          $sql3 = "SELECT * FROM `juridique`";
                                          $juridique = mysqli_query($conn, $sql3);
                                          if (mysqli_num_rows($juridique) > 0) {
                                            while ($row = mysqli_fetch_assoc($juridique)) {
                                              echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                            }
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-dollar">Capitale</label>
                                      <div class="input-group input-dollar">
                                        <span id="basic-icon-dollar" class="input-group-text"><i
                                            class="bx bx-dollar"></i></span>
                                        <input type="number" required name="capitale" min="0" id="basic-icon-dollar"
                                          class="form-control" placeholder="0000000000" aria-label="Capitale"
                                          aria-describedby="basic-icon-default-Telephone">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-Patent">Patente</label>
                                      <div class="input-group input-code">
                                        <span id="basic-icon-code" class="input-group-text"><i
                                            class="bx bx-code"></i></span>
                                        <input type="text" required name="Patent" id="basic-icon-code"
                                          class="form-control" placeholder="XXXXX" aria-label="Patent"
                                          aria-describedby="basic-icon-default-Patent">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-ICE">ICE</label>
                                      <div class="input-group input-code">
                                        <span id="basic-icon-code" class="input-group-text"><i
                                            class="bx bx-code"></i></span>
                                        <input type="text" required name="ICE" id="basic-icon-code" class="form-control"
                                          placeholder="XXXXX" aria-label="ICE"
                                          aria-describedby="basic-icon-default-ICE">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-ICE">Identifion Fiscal</label>
                                      <div class="input-group input-code">
                                        <span id="basic-icon-code" class="input-group-text"><i
                                            class="bx bx-code"></i></span>
                                        <input type="text" required name="IF" id="basic-icon-code" class="form-control"
                                          placeholder="XXXXX" aria-label="IF" aria-describedby="basic-icon-default-ICE">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-dollar">N° CNSS</label>
                                      <div class="input-group input-code">
                                        <span id="basic-icon-code" class="input-group-text"><i
                                            class="bx bx-code"></i></span>
                                        <input type="number" required name="cnss" id="basic-icon-code"
                                          class="form-control" placeholder="000000" aria-label="CNSS"
                                          aria-describedby="basic-icon-default-Telephone">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label for="html5-datetime-local-input" class="form-label">Date de
                                        création</label>
                                      <div class="col-md-10">
                                        <input class="form-control" name="datedeceation" required type="datetime-local"
                                          value="2022-10-25T00:50:00" id="html5-datetime-local-input">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                  <div class="divider">
                                    <div class="alert alert alert-success" style="display:none;" id="alertdone"
                                      role="alert"></div>
                                    <div class="alert alert-danger" style="display:none;" id="alert" role="alert"></div>
                                    <div class="divider-text">responsable</div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-dollar">Nom & prenom</label>
                                      <div class="input-group input-user">
                                        <span id="basic-icon-user" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                        <input type="text" required name="nom_prenom" placeholder="jhon jack"
                                          id="nom_prenom" class="form-control" placeholder="" aria-label="nom_prenom"
                                          aria-describedby="basic-icon-default-nom_prenom">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-phone">Telephone</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-mobile" class="input-group-text"><i
                                            class="bx bx-mobile"></i></span>
                                        <input type="text" name="tele" id="telefon" class="form-control"
                                          placeholder="(06|07)X-XXXXXXX" aria-label="Telephone"
                                          aria-describedby="basic-icon-default-Telephone">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-phone">Telephone 2</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-mobile" class="input-group-text"><i
                                            class="bx bx-mobile"></i></span>
                                        <input type="text" name="telefon2" id="telefon2" class="form-control"
                                          placeholder="(06|07)X-XXXXXXX" aria-label="Telephone"
                                          aria-describedby="basic-icon-default-Telephone">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">

                                      <label class="form-label" for="basic-icon-default-book-bookmark">Fonction</label>
                                      <div class="input-group input-group-phone">
                                        <span id="basic-icon-book-bookmark" class="input-group-text"><i
                                            class="bx bx-book-bookmark"></i></span>
                                        <select id="Fonction" name="Fonction" class="form-select">
                                          <?php
                                          $sql1 = "SELECT * FROM `fonction`";
                                          $fonction = mysqli_query($conn, $sql1);
                                          if (mysqli_num_rows($fonction) > 0) {
                                            while ($row = mysqli_fetch_assoc($fonction)) {
                                              echo "<option value=" . $row["id_fonction"] . ">" . $row["fonction"] . "</option>";
                                            }
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-at">E-mail</label>
                                      <div class="input-group input-at">
                                        <span id="basic-icon-at" class="input-group-text"><i
                                            class="bx bx-at"></i></span>
                                        <input type="mail" id="emailf" name="mailfonction" id="basic-icon-code"
                                          class="form-control" placeholder="john@example.com" aria-label="mail"
                                          aria-describedby="basic-icon-default-at">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col mb-0">
                                    <button type="button" style="margin-top: 14px !important;" id="addrespon"
                                      class="btn btn-primary">ajouter responsable</button>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-user">Ingénieur</label>
                                      <div class="input-group input-user">
                                        <span id="basic-icon-user" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                        <input type="number" required name="ingenieur" min="0" max="1000000"
                                          placeholder="XX" id="basic-icon-user" class="form-control" placeholder=""
                                          aria-label="user" aria-describedby="basic-icon-default-user">
                                      </div>
                                    </div>
                                    <div class="col mb-0">
                                      <label class="form-label" for="basic-icon-default-phone">Technicien</label>
                                      <div class="input-group input-group-user">
                                        <span id="basic-icon-user" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                        <input type="number" name="technicien" min="0" max="1000000" required
                                          id="basic-icon-user" class="form-control" placeholder="XX" aria-label="user"
                                          aria-describedby="basic-icon-default-user">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col mb-0">
                                    <label class="form-label" for="basic-icon-default-user">Cadre</label>
                                    <div class="input-group input-group-user">
                                      <span id="basic-icon-user" class="input-group-text"><i
                                          class="bx bx-user"></i></span>
                                      <input type="number" name="cadre" min="0" max="1000000" required
                                        id="basic-icon-user" class="form-control" placeholder="XX" aria-label="user"
                                        aria-describedby="basic-icon-default-user">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button type="submit" name="addsociete" class="btn btn-primary">ajouter</button>
                  </form>
                  <?php
                  if (isset($_GET["addsociete"])) {
                    $registre = $_GET["registre"];
                    $Nom = $_GET["nom"];
                    $Fax = $_GET["fax"];
                    $Tel = $_GET["tel"];
                    $sigle = $_GET["sigle"];
                    $adresse = $_GET["Adresse"];
                    $ville = $_GET["ville"];
                    $jure = $_GET["juridique"];
                    $Patente = $_GET["Patent"];
                    $ICE = $_GET["ICE"];
                    $datecration = $_GET["datedeceation"];
                    $IF = $_GET["IF"];
                    $capitale = $_GET["capitale"];
                    $viller = $_GET["viller"];
                    $region = $_GET["region"];
                    $adheree = "";
                    $chiffrea = "";
                    $cnss = $_GET["cnss"];
                    $ingenieur = $_GET["ingenieur"];
                    $technicien = $_GET["technicien"];
                    $cadre = $_GET["cadre"];
                    $email = $_GET["mail"];
                    $sec_email = $_GET["mail_sec"];
                    $query = "INSERT INTO `societe`(`registre`,`adheree`, `Nom`, `Fax`, `Tel`, `sigle`, `adresse`, `ville`, `jure`, `Patente`, `ICE`, `datecration`, `capitale`, `viller`, `region`, `adheree`, `chiffrea`,`ifs`, `cnss`, `ingenieur`, `technicien`, `cadre`, `email`, `sec_email`) 
                    VALUES ('$registre','O', '$Nom', '$Fax', '$Tel', '$sigle', '$adresse', '$ville', '$jure', '$Patente', '$ICE', '$datecration', '$capitale', '$viller', $region, '$adheree', '$chiffrea','$IF', '$cnss',$ingenieur, $technicien,$cadre, '$email', '$sec_email')";
                    $conn->query($query);
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <?php
          if (isset($_POST["updateclient"])) {
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $Adresse = $_POST["Adresse"];
            $telephone = $_POST["tele"];
            $note = $_POST["note"];
            $queryup = "UPDATE `client` SET `nom_prenom_client`='$nom',`adresse_client`='$Adresse',`tele_client`='$telephone',`note_client`='$note' WHERE `id_client`='$id'";
            $conn->query($queryup);
          }
          if (isset($_GET["id_del"])) {
            $id = $_GET["id_del"];
            $query = "DELETE FROM `societe` WHERE `registre`='$id'";
            $conn->query($query);
          }
          ?>
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>registre</th>
                  <th>Nom</th>
                  <th>sigle</th>
                  <th>Telephone</th>
                  <th>Fax</th>
                  <th>adresse</th>
                  <th>email</th>
                  <th>datecration</th>
                  <th>region</th>
                  <th>ville</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0" id="tabledata">
                <?php
                $sql = "SELECT * FROM `societe`";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $code_region = $row["region"];
                    $query1 = "SELECT * FROM `region` WHERE `code` = '" . $code_region . "'";
                    $res1 = mysqli_query($conn, $query1);
                    $row1 = mysqli_fetch_assoc($res1);
                    echo "
                          <tr id=" . $row["registre"] . ">
                            <td><strong>" . $row["registre"] . "</strong></td>
                            <td data-target=\"name\">" . $row["Nom"] . "</td>
                            <td data-target=\"sigle\">" . $row["sigle"] . "</td>
                            <td data-target=\"Tel\">" . $row["Tel"] . "</td>
                            <td data-target=\"Fax\">" . $row["Fax"] . "</td>
                            <td data-target=\"adresse\">" . $row["adresse"] . "</td>
                            <td data-target=\"email\">" . $row["email"] . "</td>
                            <td data-target=\"datecration\">" . $row["datecration"] . "</td>
                            <td>" . $row1["nom"] . "</td>
                            <td data-target=\"viller\">" . $row["viller"] . "</td>";
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

                ?>
              </tbody>
              <script>
                $(document).ready(function () {
                  $(document).on('click', 'a[data-role=update]', function () {
                    var id = $(this).data('id');
                    $('#registre').val(id)
                    $('#regionup').change(function () {
                      var regionID = $(this).val();
                      if (regionID) {
                        $.get(
                          "ajax.php", {
                          region_id: regionID
                        },
                          function (data) {
                            $('#villeup').html(data);
                          }
                        );
                      } else {
                        $("#villeup").empty();
                      }

                    });
                  });
                });
              </script>
              <?php
              include "upentrep.php";
              if (isset($_POST["updatesociete"])) {
                $Nom = $_POST["Nom"];
                $sigle = $_POST["sigle"];
                $Telephone = $_POST["telephone"];
                $fax = $_POST["fax"];
                $Adresse = $_POST["Adresse"];
                $Patent = $_POST["Patent"];
                $ICE = $_POST["ICE"];
                $IF = $_POST["IF"];
                $ville = $_POST["ville"];
                $juridique = $_POST["juridique"];
                $capitale = $_POST["capitale"];
                $ingenieur = $_POST["ingenieur"];
                $cadre = $_POST["cadre"];
                $technicien = $_POST["techn"];
                $cnss = $_POST["cnss"];
                $mail = $_POST["mail"];
                $mail_sec = $_POST["mail_sec"];
                $datedeceation = $_POST["datedeceation"];
                $registre = $_POST["registre"];
                $query = "UPDATE `societe` SET `Nom` = '$Nom',`jure`= '$juridique',`sigle` = '$ville' , `sigle` = '$sigle', `Fax` = '$fax', `Tel` = '$Telephone',
               `adresse` = '$Adresse', `Patente` = '$Patent', `ICE` = '$ICE', `datecration` = '$datedeceation',`email` = '$mail',`sec_email` = '$mail_sec',
              `capitale` = '$capitale', `cnss` = '$cnss', `ifs` = '$IF', `ingenieur` = '$ingenieur', `technicien` = '$technicien',
              `cadre` = '$cadre' WHERE `societe`.`registre` = $registre;";
                if ($conn->query($query) === TRUE) {
                } else {
                  echo "Error: " . $query . "<br>" . $conn->error;
                }
                ;
              }
              ?>
            </table>

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