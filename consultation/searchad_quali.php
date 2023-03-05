<?php
session_start();
include_once('../db/connexion.php');
/* if($_SESSION['loggedin'] = TRUE){
 echo $_SESSION['name'];
 echo $_SESSION['id'] ;
 }else{
 echo "echec";
 }*/
if (!isset($_SESSION['loggedin'])) {
    header('refresh:0;url=../404.php'); //2 s
    exit();
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Consultation</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/Asset 1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="../dashboard.php" class="app-brand-link">
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
                        <a href="../dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Tableau de bord</div>
                        </a>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item ">
                        <a href="../Entreprises.php" class="menu-link">
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
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Notifications">Ministere de l'Habitat</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="../Demandehabitat.php" class="menu-link">
                                            <div data-i18n="Account">Demande des Qualification et Classes</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="../table_comhabitat.php" class="menu-link">
                                            <div data-i18n="Account">Etude de la Comande</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="../habita_comm.php" class="menu-link">
                                            <div data-i18n="Account">Commission</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Notifications">Ministere de l'Equipement</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="../Demande.php" class="menu-link">
                                            <div data-i18n="Account">Demande des Qualification et Classes</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="../table_com.php" class="menu-link">
                                            <div data-i18n="Account">Etude de la Comande</div>
                                        </a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="../equipement_comm.php" class="menu-link">
                                            <div data-i18n="Account">Commission</div>
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
                                <a href="../adhesion.php" class="menu-link">
                                    <div data-i18n="Account">Adhésion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../cotisation.php" class="menu-link">
                                    <div data-i18n="Notifications">Cotisation</div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de
                            Consultation</span></li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-file-find "></i>
                            <div data-i18n="Account Settings">Recherche et Statistique</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="../consultation/searchad_quali.php" class="menu-link">
                                    <div data-i18n="Connections">Adhésion et Qualification</div>
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
                                <a href="../class/region.php" class="menu-link">
                                    <div data-i18n="Account">Région</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../class/ville.php" class="menu-link">
                                    <div data-i18n="Notifications">Ville</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Connections">Forme juridique</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../class/secteurs.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des secteurs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../class/GesClasses.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des Classes</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="../class/GesQulif.php" class="menu-link">
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

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/55.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/55.png" alt class="w-px-40 h-auto rounded-circle" />
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
                                        <a class="dropdown-item" href="../logout.php">
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
                    <div class="container-xxl container-p-y">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="col-md">
                                        <div class="form-check form-switch form-check-inline mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkadhesion">
                                            <label class="form-check-label" for="checkadhesion">Adhésion</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="adhesionselect" style="display: none;">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Sélection par défaut</option>
                                                <option value="ad">Adhérente</option>
                                                <option value="nad">Non Adhérente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="checkEchelle">
                                            <label class="form-check-label" for="checkEchelle">Echelle Nationale</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkTT">
                                            <label class="form-check-label" for="checkTT">TT Ministère</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="nation">
                                        <div class="col-md">
                                            <div class="form-check form-switch form-check-inline mb-3">
                                                <input class="form-check-input" type="checkbox" id="checkregion">
                                                <label class="form-check-label" for="checkregion">Région</label>
                                            </div>
                                            <div class="form-check form-check-inline" id="region" style="display: none;">
                                                <select id="regio" class="form-select" aria-label="Default select example">
                                                    <option selected>Sélection par défaut</option>
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
                                        <div class="col-md">
                                            <div class="form-check form-switch form-check-inline mb-3">
                                                <input class="form-check-input" type="checkbox" id="checkville">
                                                <label class="form-check-label" for="checkville">Ville</label>
                                            </div>
                                            <div class="form-check form-check-inline" id="ville" style="display: none;">
                                                <select id="city" class="form-select" aria-label="Default select example">
                                                    <option selected>Sélection par défaut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md">
                                        <div class="form-check form-switch form-check-inline mb-3" id="categdiv">
                                            <input class="form-check-input" type="checkbox" id="checkcat">
                                            <label class="form-check-label" for="checkcat">Categorie</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="categ" style="display: none;">
                                            <select id="categorie" class="form-select" aria-label="Default select example">
                                                <option selected>Sélection par défaut</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check form-switch form-check-inline mb-3" id="ministdiv">
                                            <input class="form-check-input" type="checkbox" id="checkminis">
                                            <label class="form-check-label" for="checkminis">Ministère</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="minis" style="display: none;">
                                            <select class="form-select" id="ministere" aria-label="Default select example">
                                                <option selected>Sélection par défaut</option>
                                                <?php
                                                $sqlministere = "SELECT * FROM `ministere`";
                                                $ministere = mysqli_query($conn, $sqlministere);
                                                if (mysqli_num_rows($ministere) > 0) {
                                                    while ($row = mysqli_fetch_assoc($ministere)) {
                                                        echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="desactivcat">
                                    <div class="col-md">
                                        <div class="form-check form-switch form-check-inline mb-3" id="sectdiv">
                                            <input class="form-check-input" type="checkbox" id="checksect">
                                            <label class="form-check-label" for="checksect">Secteur</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="secteur" style="display: none;">
                                            <select class="form-select" id="sect" aria-label="Default select example">
                                                <option selected>Sélection par défaut</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check form-switch form-check-inline mb-3" id="classdiv">
                                            <input class="form-check-input" type="checkbox" id="checkclass">
                                            <label class="form-check-label" for="checkclass">Classe</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="classe" style="display: none;">
                                            <select class="form-select" id="class" aria-label="Default select example">
                                                <option selected>Sélection par défaut</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check form-switch form-check-inline mb-3" id="soussdiv">
                                            <input class="form-check-input" type="checkbox" id="checksoussec">
                                            <label class="form-check-label" for="checksoussec">Sous-secteur</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="sosect" style="display: none;">
                                            <select class="form-select" id="qualiif" aria-label="Default select example">
                                                <option selected>Sélection par défaut</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="text-center mb-3">
                                        <div class="demo-inline-spacing">
                                            <button type="button" class="btn btn-outline-secondary">OK</button>
                                            <button type="button" class="btn btn-outline-secondary">Annuler</button>
                                            <button type="button" class="btn btn-outline-secondary">Par Type Entreprise</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive text-nowrap">
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
    <script>
        $(document).ready(function() {
            $("#checkadhesion").click(function() {
                if ($(this).is(":checked")) {
                    $("#adhesionselect").show();
                } else {
                    $("#adhesionselect").hide();
                }
            });

            $("#checkEchelle").click(function() {
                if ($(this).is(":checked")) {
                    $("#nation").hide();
                } else {
                    $("#nation").show();
                }
            });
            $("#checkregion").click(function() {
                if ($(this).is(":checked")) {
                    $("#region").show();
                } else {
                    $("#region").hide();
                }
            });
            $("#checkTT").click(function() {
                if ($(this).is(":checked")) {
                    $("#ministdiv").hide();
                    
                    $("#sectdiv").hide();
                    $("#classdiv").hide();
                    $("#soussdiv").hide();
                } else {
                    $("#ministdiv").show();
                    $("#sectdiv").show();
                    $("#classdiv").show();
                    $("#soussdiv").show();

                }
            });
            $("#checkville").click(function() {
                if ($(this).is(":checked")) {
                    $("#ville").show();
                } else {
                    $("#ville").hide();
                }
            });
            $("#checkminis").click(function() {
                if ($(this).is(":checked")) {
                    $("#minis").show();
                } else {
                    $("#minis").hide();
                }
            });
            $("#checkcat").click(function() {
                if ($(this).is(":checked")) {
                    $("#categ").show();
                    $("#categorie").show();
                    $("#desactivcat").hide();
                    $.get(
                        "../aax.php", {
                            categ: ""
                        },
                        function(data) {
                            $('#categorie').html(data);
                        }
                    );
                } else {
                    $("#categ").hide();
                    $("#categorie").hide();
                    $("#desactivcat").show();
                }
            });
            $('#ministere').change(function() {
                var ministere = $(this).val();
                if (ministere != 0) {
                    $.get(
                        "../aax.php", {
                            ministere: ministere
                        },
                        function(data) {
                            $('#sect').html(data);
                        }
                    );
                } 
            }); 
            $("#checkcat").click(function() {
                if ($(this).is(":checked")) {
                    $("#categ").show();
                } else {
                    $("#categ").hide();
                }
            });
            $("#checksect").click(function() {
                if ($(this).is(":checked")) {
                    $("#secteur").show();
                } else {
                    $("#secteur").hide();
                }
            });
            $("#checkclass").click(function() {
                if ($(this).is(":checked")) {
                    $("#classe").show();
                } else {
                    $("#classe").hide();
                }
            });
            $("#checksoussec").click(function() {
                if ($(this).is(":checked")) {
                    $("#sosect").show();
                } else {
                    $("#sosect").hide();
                }
            });
            $('#regio').change(function() {
                var regionID = $(this).val();
                if (regionID) {
                    $.get(
                        "../ajax.php", {
                            region_id: regionID
                        },
                        function(data) {
                            $('#city').html(data);
                        }
                    );
                } else {
                    $("#city").empty();
                }
            });
            $('#sect').change(function() {
                var secteuur = $(this).val();
                if (secteuur != 0) {
                    $.get(
                        "../Gclass.php", {
                            sec: secteuur,
                        },
                        function(data) {
                            //console.log(data);
                            $('#class').html(data);
                        }
                    );
                    $.get(
                        "../Gclass.php", {
                            secquali: secteuur,
                        },
                        function(data) {
                            //console.log(data);
                            $('#qualiif').html(data);
                        }
                    );
                } 
            });
            
        });
    </script>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>