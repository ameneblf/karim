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

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demande des Qualification et Classes</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/Asset 1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

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
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Account Settings">Qualifications et Classifications</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <div data-i18n="Notifications">Ministere de l'Habitat</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item active">
                                                <a href="Demandehabitat.php" class="menu-link">
                                                    <div data-i18n="Account">Demande des Qualification et Classes</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="table_comhabitat.php" class="menu-link">
                                                    <div data-i18n="Account">Etude de la Comande</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="habita_comm.php" class="menu-link">
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
                                            <li class="menu-item ">
                                                <a href="Demande.php" class="menu-link">
                                                    <div data-i18n="Account">Demande des Qualification et Classes</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="table_com.php" class="menu-link">
                                                    <div data-i18n="Account">Etude de la Comande</div>
                                                </a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="equipement_comm.php" class="menu-link">
                                                    <div data-i18n="Account">Commission</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
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
                            <li class="menu-item ">
                                <a href="consultation/searchad_quali.php" class="menu-link">
                                    <div data-i18n="Connections">Adhésion et Qualification</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de
                            setting</span></li>
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

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
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

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card mb-4">
                            <div class="content-wrapper">
                                <!-- Content -->
                                <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="row">
                                        <form action="Demandehabitat.php" id="form" method="post">
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

                                                <div class="col mb-0">
                                                    <label class="form-label" for="city">Ville</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                                                        <select id="city" required name="ville" class="form-select">
                                                            <option value="0">Sélection par défaut</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="Entreprise">Entreprise</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-buildings" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                        <select id="Entreprise" required name="Entreprise" class="form-select">
                                                            <option value="0">Sélection par défaut</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label class="form-label" for="nature_demande">Nature de la demande</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-git-pull-request" class="input-group-text"><i class="bx bx-git-pull-request"></i></span>
                                                        <select id="nature_demande" required name="nature_demande" class="form-select">
                                                            <option value="0">Sélection par défaut</option>
                                                            <?php
                                                            $sql1 = "SELECT * FROM `nature_dem`";
                                                            $nature_dem = mysqli_query($conn, $sql1);
                                                            if (mysqli_num_rows($nature_dem) > 0) {
                                                                while ($row = mysqli_fetch_assoc($nature_dem)) {
                                                                    echo "<option value=" . $row["code"] . ">" . $row["type_demande"] . "</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="Secteur">Secteur</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-intersect" class="input-group-text"><i class="bx bx-intersect"></i></span>
                                                        <select id="Secteur" required name="Secteur" class="form-select">
                                                            <?php
                                                            $querys = "select * FROM `secteur` where type_minister = 'H'";
                                                            $resS = mysqli_query($conn, $querys);
                                                            if (mysqli_num_rows($resS) > 0) {
                                                                echo "<option value=\" 0 \">Sélection par défaut</option>";
                                                                while ($row = mysqli_fetch_array($resS)) {
                                                                    echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                                }
                                                            } else {
                                                                echo "<option value=\" 0 \">Sélection par défaut</option>";
                                                            }

                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">

                                                <div class="col mb-0">
                                                    <div class="col mb-0">
                                                        <label class="form-label" for="Secteur">Classe</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-intersect" class="input-group-text"><i class="bx bx-intersect"></i></span>
                                                            <select id="Classe" required name="Classe" class="form-select">
                                                                <option value="0">Sélection par défaut</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="col-md" id="radio">

                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card">
                                                <h5 class="card-header">Qialifications demandeés</h5>
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Qualification</th>
                                                                <th>A titre</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0" id="table">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col mb-0" style="margin-top: 9px;">
                                                <div class="input-group input-group-merge">
                                                    <button type="submit" name="DemandeR" class="btn btn-info btn-lg">Demande</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- / Content -->

                                <!-- Footer -->
                                <footer class="content-footer footer bg-footer-theme"></footer>

                                <!-- / Footer -->

                                <div class="content-backdrop fade"></div>
                            </div>

                        </div>
                    </div>
                    <!-- / Content -->
                    <?php
                    if (isset($_POST["DemandeR"])) {
                        $Entreprise = $_POST["Entreprise"];
                        $nature_demande = $_POST["nature_demande"];
                        $Secteur = $_POST["Secteur"];
                        $Fonction = 0;
                        if (isset($_POST["Fonction"])) {
                            $Fonction = $_POST["Fonction"];
                        }
                        $Classe = $_POST["Classe"];
                        $addquery = "INSERT INTO `demand`(`date`, `register`, `nature_demande`,`Commission`,`ministere`, `etat_demande` ,`Fonction`) 
                                    VALUES ('" . date('y-m-d') . "',$Entreprise,'$nature_demande','Regionale','H','EN',$Fonction)";
                        if ($conn->query($addquery) === TRUE) {
                            $select = "SELECT max(id_demand) FROM demand";
                            $result = mysqli_query($conn, $select);
                            $result = mysqli_fetch_row($result);
                            $titr = $_POST["titrev"];
                            foreach ($titr as $x => $x_value) {
                                $addquali = "INSERT INTO `qualid_demand`(`codesec`,`codeclass`,`Qualif`, `titre`, `id_demand`) VALUES ('$Secteur','$Classe','$x','$x_value','$result[0]')";
                                $conn->query($addquali);
                            }
                        } else {
                            echo "Error: " . $addquery . "<br>" . $conn->error;
                        };
                    }


                    ?>
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
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
    <script>
        $(document).ready(function() {
            $('#region2').change(function() {
                var regionID = $(this).val();
                if (regionID) {
                    $.get(
                        "ajax.php", {
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
            $('#city').change(function() {
                var city = $(this).val();
                var region = $('#region2').val()
                if (city) {
                    $.get(
                        "societeselect.php", {
                            region: region,
                            city: city
                        },
                        function(data) {
                            //console.log(data);
                            $('#Entreprise').html(data);
                        }
                    );
                } else {
                    $("#Entreprise").empty();
                }
                //console.log(region + " " + city);
            });
            $('#Secteur').change(function() {
                var Secteur = $(this).val();
                if (Secteur) {
                    $.get(
                        "societeselect.php", {
                            Secteur: Secteur
                        },
                        function(data) {
                            $('#table').html(data);
                        }
                    );
                    $.get(
                        "Gclass.php", {
                            secteurH: Secteur,
                        },
                        function(data) {
                            //console.log(data);
                            $('#Classe').html(data);
                        }
                    );
                } else {
                    $("#table").empty();
                    $("#Classe").empty();
                }

                //console.log(region + " " + city);
            });
            $('#radio').change(function() {
                var radio = $("input[name='Fonction']:checked").val();
                var Secteur = $('#Secteur').val();
                if (Secteur) {
                    $.get(
                        "Gclass.php", {
                            secteur: Secteur,
                            radio: radio
                        },
                        function(data) {
                            //console.log(data);
                            $('#Classe').html(data);
                        }
                    );
                } else {
                    $("#Classe").empty();
                }
            });

        });
    </script>
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