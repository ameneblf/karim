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

    <title>affichage d'Entreprise</title>

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

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
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
                            <li class="menu-item active">
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

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
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
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatars/55.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="assets/img/avatars/55.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
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
                        <div class="card row g-2">
                            <div class="row mb-0">
                                <div class="col-md-6 col-lg-8">
                                    <h4 class="fw-bold py-3 mb-2" style="padding-left: calc(var(--bs-gutter-x) * 0.5);">
                                        <span class="text-muted fw-light">societe / </span>
                                        <?php if (isset($_GET["id_affiche"])) {
                                            $id_registre = $_GET["id_affiche"];
                                            $query = "SELECT * FROM `societe` where registre = $id_registre";
                                            $res = mysqli_query($conn, $query);
                                            $row = mysqli_fetch_row($res);
                                            print_r($row[1]);
                                        }
                                        ?>
                                    </h4>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="py-3 mb-4" style="text-align: end;">
                                        <button type="button" class="btn btn-outline-secondary">
                                            <i class="tf-icons bx bx-import"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md mb-4 mb-md-0">
                                <?php
                                if (isset($_GET["id_affiche"])) {
                                    $id_registre = $_GET["id_affiche"];
                                    $query = "SELECT * FROM `societe` where registre = $id_registre";
                                    $res = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_assoc($res);
                                    $ingenieur = $row["ingenieur"];
                                    $CADRE = $row["cadre"];
                                    $TECHNICIEN = $row["technicien"];
                                    $code_ville = $row["ville"];
                                    $query1 = "SELECT * FROM `ville` WHERE `code` = '" . $code_ville . "'";
                                    $res1 = mysqli_query($conn, $query1);
                                    $row1 = mysqli_fetch_assoc($res1);
                                    $query2 = "SELECT * FROM `region` WHERE `code` = '" . $row1["region"] . "'";
                                    $res2 = mysqli_query($conn, $query2);
                                    $row2 = mysqli_fetch_assoc($res2);
                                    echo "<div class=\" card-body\">    
                                            <div class=\"row \">
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">N° de Register</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["registre"] . ">
                                                </div>
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">À</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row1["nom"] . ">
                                                </div>";
                                    echo "  <div class=\"col mb-0\">
                                                <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">SIGLE</label>
                                                <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["sigle"] . ">
                                            </div>
                                        <div class=\"row \">
                                            <div class=\"col mb-0\">
                                                <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Region</label><br>" . $row2["nom"] . "
                                            </div>
                                            <div class=\"col mb-0\">
                                                <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">ADRESSE</label> <br>" . strtoupper($row["adresse"]) . "
                                            </div>";
                                    echo "</div>
                                    </div>
                                            <div class=\"row\">
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Email 1</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["email"] . ">
                                                </div>
                                                <div class=\"col mb-0\">";
                                    if ($row["sec_email"] != "") {
                                        echo
                                            "           <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Email 2</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["sec_email"] . ">
                                                </div>
                                            ";
                                    } ?>


                            </div>
                        </div>
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="false"
                                        aria-controls="accordionOne">
                                        identification
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php
                                    echo "<div class=\"row g-3 \">
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Telephone</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["Tel"] . ">
                                                </div>
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Fax</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["Fax"] . ">
                                                </div>
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">capitale</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["capitale"] . "DH>
                                                </div>
                                            </div>";
                                    echo "<div class=\"row g-3 \">
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">ICE</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["ICE"] . ">
                                                </div>
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Patente</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["Patente"] . ">
                                                </div>
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">IDENTIFION FISCAL</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["ifs"] . ">
                                                </div>
                                            </div>";
                                    echo "<div class=\"row g-3 \">
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">DATE DE CRÉATION</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["datecration"] . ">
                                                </div>
                                                <div class=\"col mb-0\">
                                                    <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">N° CNSS</label>
                                                    <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $row["cnss"] . ">
                                                </div>
                                            </div>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false"
                                        aria-controls="accordionTwo">
                                        Contact
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php
                                    $sql = "SELECT * FROM `responsable` where registre_societe = $id_registre";
                                    $responsable = mysqli_query($conn, $sql);

                                        ?>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>NOM & PRENOM</th>
                                                                <th>TELEPHONE</th>
                                                                <th>TELEPHONE 2</th>
                                                                <th>FONCTION</th>
                                                                <th>E-MAIL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                    if (mysqli_num_rows($responsable) > 0) {
                                        while ($row = mysqli_fetch_assoc($responsable)) { ?>
                                                            <tr>
                                                                <td>
                                                                    <i
                                                                        class="fab fa-angular fa-lg text-danger me-3"></i><strong>
                                                                        <?php echo $row["nom_prenom"] ?>
                                                                    </strong>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["tele_responsqble"] ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["tele_resp"] ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                            $var = $row["fonction"];
                                            $sql2 = "SELECT * FROM `fonction` WHERE `id_fonction` = $var";
                                            $queryf = mysqli_query($conn, $sql2);
                                            $fonction = mysqli_fetch_row($queryf);
                                            echo $fonction[1];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["mail"] ?>
                                                                </td>
                                                            </tr>
                                                            <?php }
                                    } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        ressources humaines
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php
                                    echo "<div class=\"row g-3 \">
                                        <div class=\"col mb-0\">
                                            <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">INGÉNIEUR</label>
                                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $ingenieur . ">
                                        </div>
                                        <div class=\"col mb-0\">
                                            <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">CADRE</label>
                                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $CADRE . ">
                                        </div>
                                        <div class=\"col mb-0\">
                                            <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">TECHNICIEN</label>
                                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"exampleFormControlReadOnlyInputPlain1\" value=" . $TECHNICIEN . ">
                                        </div>
                                    </div>";
                                }
                                if (!isset($_GET["id_affiche"])) {
                                    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                                    exit;
                                }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- / Content -->
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