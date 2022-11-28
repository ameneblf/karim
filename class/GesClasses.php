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

    <title>Gestion des Classes</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/Asset 1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

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
                    <li class="menu-item ">
                        <a href="../dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Tableau de bord</div>
                        </a>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item">
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
                                        <a href="../Demande.php" class="menu-link">
                                            <div data-i18n="Account">Demande des Qualification et Classes</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="../table_com.php" class="menu-link">
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
                            <li class="menu-item ">
                                <a href="../adhesion.php" class="menu-link">
                                    <div data-i18n="Account">Adhésion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../cotisation.php" class="menu-link">
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
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de
                            setting</span></li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-key"></i>
                            <div data-i18n="Account Settings">Paramétres</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="region.php" class="menu-link">
                                    <div data-i18n="Account">Région</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ville.php" class="menu-link">
                                    <div data-i18n="Notifications">Ville</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Connections">Forme juridique</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="secteurs.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des secteurs</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="GesClasses.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des Classes</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="GesQulif.php" class="menu-link">
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
                                        <img src="../assets/img/avatars/55.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/55.png" alt
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
                                    <a class=\"dropdown-item\" href=\"../setting.php\">
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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        

                        <br>
                        <div class="card row g-2 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-header"> <strong>Tableaux des Classes</strong></h5>
                                </div>
                                <div class="col-md-4 "
                                    style="margin-left: auto;text-align-last: right; align-self: center; padding-right: calc(var(--bs-gutter-x) * 0.9);">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary bx bx-message-square-add"
                                        data-bs-toggle="modal" data-bs-target="#modaladd">
                                    </button>
                                </div>
                            </div>
                            <div class="modal fade " id="modaladd" tabindex="-1" style="display: none;"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered"
                                    style="max-width: 30rem !important; display: block;" role="document">
                                    <form action="GesClasses.php" method="POST">
                                        <div class="modal-content container-xxl">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">ajouter une Classe</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card-body">
                                                <div class="col mb-0">
                                                    <label class="form-label"
                                                        for="basic-icon-default-phone">code</label>
                                                    <div class="input-group input-code">
                                                        <span id="basic-icon-code" class="input-group-text"><i
                                                                class="bx bx-hash"></i></span>
                                                        <input type="text" required name="code" id="basic-icon-code"
                                                            class="form-control" placeholder="XXXXX" aria-label="numreg"
                                                            aria-describedby="basic-icon-default-numreg">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-company">nom</label>
                                                        <div class="input-group input-code">
                                                            <span id="basic-icon-code" class="input-group-text"><i
                                                                    class="bx bxs-rename"></i></span>
                                                            <input type="text" required name="nom" id="basic-icon-code"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="numreg"
                                                                aria-describedby="basic-icon-default-numreg">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-map-alt">direction</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-directions" class="input-group-text"><i
                                                                    class="bx bx-directions"></i></span>
                                                            <select required name="direction" id="direction"
                                                                class="form-select">
                                                                <option value="0 ">Sélection par défaut</option>
                                                                <?php
                                                                $qdirection = "SELECT * FROM `direction`";
                                                                $direction = mysqli_query($conn, $qdirection);
                                                                if (mysqli_num_rows($direction) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($direction)) {
                                                                        echo "<option value=" . $row["Code"] . ">" . $row["nom"] . "</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-map-alt">ministère</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-briefcase-alt-2"
                                                                class="input-group-text"><i
                                                                    class="bx bx-briefcase-alt-2"></i></span>
                                                            <select required name="ministere" id="ministere"
                                                                class="form-select">
                                                                <option value="0 ">Sélection par défaut</option>
                                                                <?php
                                                                $qministere = "SELECT * FROM `ministere`";
                                                                $ministere = mysqli_query($conn, $qministere);
                                                                if (mysqli_num_rows($ministere) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($ministere)) {
                                                                        echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-map-alt">Secteur</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-category" class="input-group-text"><i
                                                                    class="bx bx-category"></i></span>
                                                            <select required name="Secteur" id="Secteur"
                                                                class="form-select">
                                                                <option value="0 ">Sélection par défaut</option>
                                                                <?php
                                                                $qsecteur = "SELECT * FROM `secteur`";
                                                                $secteur = mysqli_query($conn, $qsecteur);
                                                                if (mysqli_num_rows($secteur) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($secteur)) {
                                                                        echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-company">Chiffre D'affaires</label>
                                                        <div class="input-group input-code">
                                                            <span id="basic-icon-code"
                                                                class="input-group-text">>=</span>
                                                            <input type="number" required name="CA" id="basic-icon-code"
                                                                class="form-control" min="0" placeholder="XXXXX"
                                                                aria-label="CA"
                                                                aria-describedby="basic-icon-default-CA">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-company">Capital social</label>
                                                        <div class="input-group input-code">
                                                            <span id="basic-icon-code"
                                                                class="input-group-text">>=</span>
                                                            <input type="number" min="0" required name="CS"
                                                                id="basic-icon-code" class="form-control"
                                                                placeholder="XXXXX" aria-label="CA"
                                                                aria-describedby="basic-icon-default-CA">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="basic-icon-default-company">Nombre
                                                        Minimum
                                                        D'Ingénieurs</label>
                                                    <div class="input-group input-nbing">
                                                        <span id="basic-icon-code" class="input-group-text"><i
                                                                class='bx bx-user-circle'></i></span>
                                                        <input type="number" min="0" required name="nbing" id="nbing"
                                                            class="form-control" placeholder="XXXXX" aria-label="nbing"
                                                            aria-describedby="basic-icon-default-nbing">
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label"
                                                        for="basic-icon-default-company">Technicien</label>
                                                    <div class="input-group input-nbing">
                                                        <span id="basic-icon-code" class="input-group-text"><i
                                                                class='bx bx-user-circle'></i></span>
                                                        <input type="number" required name="nbt" id="nbt"
                                                            class="form-control" min="0" placeholder="XXXXX"
                                                            aria-label="nbt"
                                                            aria-describedby="basic-icon-default-nbing">
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="basic-icon-default-company">Note
                                                        minimale d'encadrement</label>
                                                    <div class="input-group input-nbing">
                                                        <span id="basic-icon-code" class="input-group-text"><i
                                                                class='bx bx-user-circle'></i></span>
                                                        <input type="number" required name="nme" id="nme"
                                                            class="form-control" min="0" placeholder="XXXXX"
                                                            aria-label="nme"
                                                            aria-describedby="basic-icon-default-nbing">
                                                    </div>
                                                </div>
                                                <div class="col mb-0" style="margin-top: 9px;">
                                                    <button type="submit" name="Addclass"
                                                        class="btn btn-primary">ajouter</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST["updateClass"])) {
                            $code = $_POST["codeup"];
                                $nom = $_POST["nomup"];
                                $ministere = $_POST["ministereup"];
                                $Secteur = $_POST["Secteurup"];
                                $chiffre_aff = $_POST["CAup"];
                                $CS = $_POST["CSup"];
                                $type_direction = $_POST["directionup"];
                                $Nb_min_ing = $_POST["nbingup"];
                                $nbt = $_POST["nbtup"];
                                $nme = $_POST["nmeup"];
                            $queryup = "UPDATE `classe` SET `nom`='$nom',`ministere`='$ministere',`type_direction`='$type_direction' ,`chiffre_aff`='$chiffre_aff' ,`CS`='$CS' ,`Nb_min_ing`='$Nb_min_ing',`Nb_tech`='$nbt',`nb_min_encadre`='$nme',`secteur`='$Secteur' WHERE `code` LIKE '$code' ";
                            if ($conn->query($queryup) === TRUE) {
                            } else {
                                echo "Error: " . $queryup . "<br>" . $conn->error;
                            }
                            ;
                        }
                        if (isset($_GET["id_del"])) {
                            $id = $_GET["id_del"];
                            $query = "DELETE FROM `classe` WHERE `code`='$id'";
                            if ($conn->query($query) === TRUE) {
                            } else {
                                echo "Error: " . $queryup . "<br>" . $conn->error;
                            }
                            ;
                        }
                        ?>
                        <div class="table-responsive text-nowrap">
                            <?php
                            if (isset($_POST["Addclass"])) {
                                $code = $_POST["code"];
                                $nom = $_POST["nom"];
                                $ministere = $_POST["ministere"];
                                $Secteur = $_POST["Secteur"];
                                $chiffre_aff = $_POST["CA"];
                                $CS = $_POST["CS"];
                                $type_direction = $_POST["direction"];
                                $Nb_min_ing = $_POST["nbing"];
                                $nbt = $_POST["nbt"];
                                $nme = $_POST["nme"];
                                $addquery = "INSERT INTO `classe`(`code`, `nom`, `ministere`,`type_direction` , `chiffre_aff`,`CS`,`Nb_min_ing`, `Nb_tech`,`nb_min_encadre`,`secteur`) VALUES ('$code','$nom','$ministere','$type_direction',$chiffre_aff,$CS,$Nb_min_ing,$nbt,$nme,'$Secteur')";
                                if ($conn->query($addquery) === TRUE) {
                                } else {
                                    echo "Error: " . $addquery . "<br>" . $conn->error;
                                }
                                ;
                            }
                            
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Classe</th>
                                        <th>minister</th>
                                        <th>Type direction</th>
                                        <th>Chiffre d'affaires</th>
                                        <th>Capital social</th>
                                        <th>Nombre minimum D'ingénieurs</th>
                                        <th>Technicien</th>
                                        <th>Note minimale D'encadrement</th>
                                        <th>secteur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0" id="tabledata">
                                    <?php
                                    $sql = "SELECT * FROM `classe` ORDER BY `classe`.`chiffre_aff` DESC";
                                    $query = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo "
                                                        <tr id=" . $row["code"] . ">
                                                            <td><strong>" . $row["code"] . "</strong></td>
                                                            <td data-target=\"name\">" . $row["nom"] . "</td>
                                                            <td data-target=\"minister\">";
                                            $var = $row["ministere"];
                                            $qministere = "SELECT * FROM `data_r`.`ministere` WHERE `code` = '$var'";
                                            $ministere = mysqli_query($conn, $qministere);
                                            if (mysqli_num_rows($ministere) > 0) {
                                                while ($row1 = mysqli_fetch_array($ministere)) {
                                                    echo $row1[1] . "</td>";
                                                }
                                            };
                                            echo "          <td data-target=\"type_direction\">";
                                            $var = $row["type_direction"];
                                            $qdirection = "SELECT * FROM `data_r`.`direction` WHERE `code` = '$var'";
                                            $direction = mysqli_query($conn, $qdirection);
                                            if (mysqli_num_rows($direction) > 0) {
                                                while ($row1 = mysqli_fetch_array($direction)) {
                                                    echo $row1[1] . "</td>";
                                                }
                                            };
                                            echo "          <td data-target=\"chiffre_aff\"> >=" . $row["chiffre_aff"] . "MDH</td>
                                                            <td data-target=\"CS\"> >=" . $row["CS"] . "MDH</td>
                                                            <td data-target=\"Nb_min_ing\">" . $row["Nb_min_ing"] . "</td>
                                                            <td data-target=\"Nb_tech\">" . $row["Nb_tech"] . "</td>
                                                            <td data-target=\"nb_min_encadre\">" . $row["nb_min_encadre"] . "</td>
                                                            <td data-target=\"secteur\">" ;
                                                            $var=$row["secteur"];
                                                            $qsecteur = "SELECT * FROM `data_r`.`secteur` WHERE `code` = '$var'";
                                                            $secteur = mysqli_query($conn, $qsecteur);
                                                            if (mysqli_num_rows($secteur) > 0) {
                                                                while ($row1 = mysqli_fetch_array($secteur)) {
                                                                    echo  $row1[1]."</td>";
                                                                }
                                                            };
                                            if ($_COOKIE['type_user'] == 1) {
                                                echo "<td>
                                                            <div class=\"dropdown\">
                                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                                </button>
                                                                <div class=\"dropdown-menu\">
                                                                <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                                                <a class=\"dropdown-item\" href=GesClasses.php?id_del=" . $row["code"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>";
                                            } else {
                                                echo "<td>
                                                            <div class=\"dropdown\">
                                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                                </button>
                                                                <div class=\"dropdown-menu\">
                                                                <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>";
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php include "upclass.php" ?>
                        </div>
                    </div>
                </div>
                <!-- Content wrapper -->
                <div class="card mb-4" style="margin-top: 12px;">
                    <div class="demo-inline-spacing">
                        <!-- Basic Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination" style="padding-left: 1%;">
                                <li class="page-item first">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">2</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0);">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">5</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevron-right"></i></a>
                                </li>
                                <li class="page-item last">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevrons-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!--/ Basic Pagination -->
                    </div>
                </div>
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <script>
        $(document).ready(function () {
            $(document).on('click', 'a[data-role=update]', function () {
                var id = $(this).data('id');
                var name = $('#' + id).children('td[data-target=name]').text();
                $('#codeup').val(id);
                $('#nomup').val(name);
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