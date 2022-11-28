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

    <title>Gestion des secteurs</title>

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
                            <li class="menu-item active">
                                <a href="secteurs.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des secteurs</div>
                                </a>
                            </li>
                            <li class="menu-item">
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
                        <!--<div class="card row g-2">
                            <div class="input-group input-group-merge col mb-0" style="margin-bottom: -5px !important;">
                                <span class="input-group-text" id="basic-addon-search31"><i
                                        class="bx bx-search"></i></span>
                                <input id="search" type="text" class="form-control"
                                    placeholder="Recherche par nom | code ville" aria-label="Search..."
                                    aria-describedby="basic-addon-search31">
                            </div>
                            <div class="row g-2" style="padding-bottom: calc(var(--bs-gutter-x) * 0.7);">
                                <script>
                                    $(document).ready(function () {
                                        $("#search").keyup(function () {
                                            var search = $("#search").val()
                                            $.ajax({
                                                url: 'searchsec.php',
                                                method: 'post',
                                                data: {
                                                    ssecteur: search
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
                                 <div class="mb-2 col">
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
                            </div>
                        </div>-->

                        <br>
                        <div class="card row g-2 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-header"> <strong>Tableaux des secteurs</strong></h5>
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
                                    <form action="secteurs.php" method="post">
                                        <div class="modal-content container-xxl">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Add secteur</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-phone">code</label>
                                                        <div class="input-group input-code">
                                                            <span id="basic-icon-code" class="input-group-text"><i
                                                                    class="bx bx-hash"></i></span>
                                                            <input type="text" required name="code" id="basic-icon-code"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="numreg"
                                                                aria-describedby="basic-icon-default-numreg">
                                                        </div>
                                                    </div>
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
                                                            for="basic-icon-default-map-alt">catégorie</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-category" class="input-group-text"><i
                                                                    class="bx bx-category"></i></span>
                                                            <select required name="categ" id="categ"
                                                                class="form-select">
                                                                <option value="0 ">Sélection par défaut</option>
                                                                <?php
                                                                $qcateg = "SELECT * FROM `categ`";
                                                                $categ = mysqli_query($conn, $qcateg);
                                                                if (mysqli_num_rows($categ) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($categ)) {
                                                                        echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col mb-0">
                                                    <input class="form-check-input" type="checkbox" name="capital" id="inlineCheckbox1"
                                                        value="1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Classification sur la base du Capital social</label>
                                                </div>
                                                <div class="col mb-0" style="margin-top: 12px;">
                                                    <button type="submit" name="Addsect"
                                                        class="btn btn-primary">ajouter</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST["updatesec"])) {
                            $id = $_POST["codeup"];
                            $noms = $_POST["nomup"];
                            $ministere = $_POST["ministereup"];
                            $categ = $_POST["categup"];
                            $queryup = "UPDATE `secteur` SET `nom`='$noms',`type_minister`='$ministere',`categorie`='$categ' WHERE `code` LIKE '$id' ";
                            if ($conn->query($queryup) === TRUE) {
                            } else {
                                echo "Error: " . $queryup . "<br>" . $conn->error;
                            }
                            ;
                        }
                        if (isset($_GET["id_del"])) {
                            $id = $_GET["id_del"];
                            $query = "DELETE FROM `secteur` WHERE `code`='$id'";
                            if ($conn->query($query) === TRUE) {
                            } else {
                                echo "Error: " . $queryup . "<br>" . $conn->error;
                            }
                            ;
                        }
                        ?>
                        <div class="table-responsive text-nowrap">
                            <?php
                            if (isset($_POST["Addsect"])) {
                                $capital=0;
                                if (isset($_POST["capital"])) {
                                    $capital=$_POST["capital"];
                                }
                                $code = $_POST["code"];
                                $nom = $_POST["nom"];
                                $ministere = $_POST["ministere"];
                                $categ = $_POST["categ"];
                                $addquery = "INSERT INTO `secteur`(`code`, `nom`, `type_minister`, `categorie`,`base_capital`)  VALUES ('$code','$nom','$ministere','$categ',$capital)";
                                if ($conn->query($addquery) === TRUE) {
                                } else {
                                    echo "Error: " . $addquery . "<br>" . $conn->error;
                                }
                                ;
                            }
                            ;
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Nom de Secteur</th>
                                        <th>type de minister</th>
                                        <th>Categorie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0" id="tabledata">
                                    <?php
                                    $sql = "SELECT * FROM `secteur`";
                                    $query = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo "
                                                        <tr id=" . $row["code"] . ">
                                                            <td><strong>" . $row["code"] . "</strong></td>
                                                            <td data-target=\"name\">" . $row["nom"] . "</td>
                                                            <td data-target=\"type_minister\">" . $row["type_minister"] . "</td>
                                                            <td data-target=\"categorie\">" . $row["categorie"] . "</td>";
                                            if ($_COOKIE['type_user'] == 1) {
                                                echo "<td>
                                                            <div class=\"dropdown\">
                                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                                </button>
                                                                <div class=\"dropdown-menu\">
                                                                <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                                                <a class=\"dropdown-item\" href=secteurs.php?id_del=" . $row["code"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
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
                            <?php include "upsect.php" ?>
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
                $('#upcode').val(id);
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