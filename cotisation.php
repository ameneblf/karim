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

    <title>Cotisation</title>

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
                            <li class="menu-item active">
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
                <script>
                    $(document).ready(function () {
                        $('#ville').change(function () {
                            var regionID = $('#region').val();
                            var villeID = $('#ville').val();
                            if (villeID) {
                                $.get(
                                    "cotis.php", {
                                    cotisa: "ad",
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
                        $('#Entreprise').change(function () {
                            var entre = $(this).val();
                            if (entre) {
                                $.get(
                                    "cotis.php", {
                                    date: "date",
                                    registre: entre
                                },
                                    function (data) {
                                        $('#ANNEE').html(data);
                                        //console.log(data);
                                    }
                                );
                            } else {
                                $("#Entreprise").empty();
                            }
                        });
                        $('#type_pai').change(function () {
                            var vir = $('#type_pai').val();
                            console.log(vir)
                            if (vir == 'versement') {
                                $('#nbch').css("display", "none");
                                $('#bq').css("display", "none");

                            } else {
                                $('#nbch').css("display", "block");
                                $('#bq').css("display", "block");
                            }
                        });

                        $(document).on("click", "a.editcotis", function () {
                            var ucid = $(this).closest("tr");
                            var uid = ucid.find("td:eq(0)").text();
                            var regi = ucid.find("td:eq(1)").text();
                            var date = ucid.find("td:eq(2)").text();
                            var numero_che = ucid.find("td:eq(6)").text();
                            var montant = ucid.find("td:eq(7)").text();
                            var lieu = ucid.find("td:eq(8)").text();
                            $('#dateup').attr('value', date);
                            $('#lieuup').attr('value', lieu);
                            $('#ref').attr('value', uid);
                            $('#nb_cheque').attr('value', numero_che);
                            $('#montant').attr('value', montant.replace("DH", ""));
                            console.log(montant);

                        });

                        $('#ANNEE').change(function () {
                            var selected = $(this).val();
                            var datecou = [];
                            var id_selects = $('#Entreprise option:selected').val();
                            var reff = $('#reff').val();
                            $('#ANNEE option').each(function () {
                                datecou.push($(this).attr('value'));
                            });
                            var max = datecou[datecou.length - 1];
                            var min = datecou[0]
                            if (selected > min && selected <= max) {
                                var str = "Voyez-vous une amnistie des frais entre " + min + " et " + selected;
                                if (confirm(str)) {
                                    $.get(
                                        "amiste.php", {
                                        amnist: "",
                                        date_min: min,
                                        date_max: selected,
                                        id_entre: id_selects,
                                        ref: reff,
                                    },
                                        function (data) {
                                            console.log(data);
                                        }
                                    );
                                } else {
                                    $('#ANNEE').prop("selectedIndex", 0);
                                }
                                location.reload();
                                console.log($(this).val());
                            }
                        });
                    });
                </script>
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-header"> <strong>Cotisation</strong></h5>
                                </div>
                                <div class="col-md-4 "
                                    style="margin-left: auto;text-align-last: right; align-self: center; padding-right: calc(var(--bs-gutter-x) * 0.9);">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary bx bx-message-square-add"
                                        data-bs-toggle="modal" data-bs-target="#modaladd">
                                    </button>
                                </div>
                            </div>

                            <?php include 'updatecotis.php'; ?>

                            <div class="modal fade " id="modaladd" tabindex="-1" style="display: none;"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered"
                                    style="max-width: 30rem !important; display: block;" role="document">
                                    <form action="cotisation.php" method="get">
                                        <div class="modal-content container-xxl">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Add Cotisation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card-body">
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-map-alt">Région</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-map-alt" class="input-group-text"><i
                                                                    class="bx bx-map-alt"></i></span>
                                                            <select id="region" required name="region"
                                                                class="form-select">
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
                                                        <label class="form-label"
                                                            for="basic-icon-default-map">Ville</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-map" class="input-group-text"><i
                                                                    class="bx bx-map"></i></span>
                                                            <select id="ville" name="ville" class="form-select">
                                                                <option value="0">Sélection par défaut</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="basic-icon-default-phone">Nom
                                                        d'Entreprise</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-rename" class="input-group-text"><i
                                                                class="bx bx-rename"></i></span>
                                                        <select id="Entreprise" required name="Entreprise"
                                                            class="form-select">
                                                            <option value="0">Sélection par défaut</option>
                                                            <!-- <option id="registers" ></option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label" for="basic-icon-default-phone">Année
                                                            de Cotisation</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-calendar" class="input-group-text"><i
                                                                    class="bx bx-calendar"></i></span>
                                                            <select id="ANNEE" required name="ANNEE"
                                                                class="form-select">
                                                                <option value="0">Sélection par défaut</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-note">Ref</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-objects-horizontal-left"
                                                                class="input-group-text"><i
                                                                    class="bx bx-code"></i></span>
                                                            <input type="number" id="reff" disabled name="ref" value="<?php $ref = (rand(1, 10000000));
                                                                echo $ref; ?>" id="basic-icon-code" class="form-control"
                                                                placeholder="XXXXX" aria-label="ref"
                                                                aria-describedby="basic-icon-default-ref">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-phone">Date</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-calendar" class="input-group-text"><i
                                                                    class="bx bx-calendar"></i></span>
                                                            <input type="date" name="date" id="basic-icon-code"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="date"
                                                                aria-describedby="basic-icon-default-date">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-note">Lieu</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-map" class="input-group-text"><i
                                                                    class="bx bx-map"></i></span>
                                                            <input type="text" name="Lieu" id="basic-icon-map"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="map"
                                                                aria-describedby="basic-icon-default-lieu">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label" for="basic-icon-default-phone">type de
                                                            paiement</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-money-withdraw"
                                                                class="input-group-text"><i
                                                                    class="bx bx-money-withdraw"></i></span>
                                                            <select id="type_pai" required name="type_pai"
                                                                class="form-select">
                                                                <option value="cheque">Cheque</option>
                                                                <option value="lcn">LCN</option>
                                                                <option value="virement">Virement</option>
                                                                <option value="versement">Versement</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0" id="bq">
                                                        <label class="form-label"
                                                            for="basic-icon-default-bank">Banque</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-calendar" class="input-group-text"><i
                                                                    class="bx bxs-bank"></i></span>
                                                            <select id="banque" name="banque" class="form-select">
                                                                <option value="0">Sélection par défaut</option>
                                                                <?php
                                                                $sqlq = "SELECT * FROM `banque`";
                                                                $resul = mysqli_query($conn, $sqlq);
                                                                if (mysqli_num_rows($resul) > 0) {
                                                                    while ($i = mysqli_fetch_assoc($resul)) {
                                                                        echo "<option value=" . $i["code"] . ">" . $i["Nom"] . "</option>";
                                                                    }
                                                                } else {
                                                                    echo "Error: " . $conn->error;
                                                                }
                                                                ;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0" id="nbch">
                                                        <label class="form-label" for="basic-icon-default-note">N
                                                            Cheque</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-dollar" class="input-group-text"><i
                                                                    class="bx bx-code"></i></span>
                                                            <input type="text" name="nb_cheque" id="basic-icon-map"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="code"
                                                                aria-describedby="basic-icon-default-code">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-note">Montant</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-dollar" class="input-group-text"><i
                                                                    class="bx bx-dollar"></i></span>
                                                            <input type="number" min="0" name="montant" required
                                                                id="basic-icon-map" class="form-control"
                                                                placeholder="XXXXX" aria-label="dollar"
                                                                aria-describedby="basic-icon-default-montant">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col mb-0" style="margin-top: 9px;">
                                                    <div class="input-group input-group-merge">
                                                        <button type="submit" name="addcotis"
                                                            class="btn btn-primary">ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if (isset($_GET["modifierco"])) {
                                $ref = $_GET["ref"];
                                $date = $_GET["date"];
                                $Lieu = $_GET["Lieu"];
                                $type_pai = $_GET["type_pai"];
                                $banque = $_GET["banque"];
                                $nb_cheque = $_GET["nb_cheque"];
                                $montant = $_GET["montant"];
                                $queryup = "UPDATE `cotis` SET `dat`='$date',`type_paiement`='$type_pai',`cheque`='$nb_cheque',`banque`='$banque',`montant`=$montant,`lieu`='$Lieu' WHERE `num`=$ref";
                                $conn->query($queryup);
                            }
                            if (isset($_GET["cotisation_del"])) {
                                $id = $_GET["cotisation_del"];
                                $query = "DELETE FROM `cotis` WHERE `num`='$id'";
                                $conn->query($query);
                                if ($conn->query($query) === TRUE) {
                                } else {
                                    echo "Error: " . $query . "<br>" . $conn->error;
                                }
                                ;
                            }
                            ?>
                            <div class="table-responsive text-nowrap">
                                <?php
                                if (isset($_GET["addcotis"])) {
                                    $Entreprise = $_GET["Entreprise"];
                                    $ANNEE = $_GET["ANNEE"];
                                    $date = $_GET["date"];
                                    $reff = $ref;
                                    $Lieu = $_GET["Lieu"];
                                    $type_pai = $_GET["type_pai"];
                                    $banque = $_GET["banque"];
                                    $nb_cheque = $_GET["nb_cheque"];
                                    $montant = $_GET["montant"];
                                    $insertcotis = "INSERT INTO `cotis`(`registre`, `dat`, `type_paiement`, `cheque`, `banque`, `montant`, `lieu`, `ANNEE`, `num`) VALUES ($Entreprise,'$date','$type_pai','$nb_cheque','$banque',$montant,'$Lieu',$ANNEE,$reff)";

                                    if ($conn->query($insertcotis) === TRUE) {
                                    } else {
                                        echo "Error: " . $insertcotis . "<br>" . $conn->error;
                                    }
                                    ;
                                }
                                ?>
                                <table class="table table-hover" id="table_cotis">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Registre</th>
                                            <th>Date</th>
                                            <th>annee</th>
                                            <th>Banque</th>
                                            <th>type de paiement</th>
                                            <th>Numero de cheque</th>
                                            <th>Montant</th>
                                            <th>Lieu</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php
                                        $sql = "SELECT * FROM `cotis`";
                                        $query = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                $ide = $row["num"];
                                                echo "
                                                    <tr>
                                                        <td><strong>" . $row["num"] . "</strong></td>
                                                        <td>" . $row["registre"] . "</td>
                                                        <td>" . $row["dat"] . "</td>
                                                        <td>" . $row["ANNEE"] . "</td>
                                                        <td>";
                                                if ($row["banque"] == '0') {
                                                    echo "XXX";
                                                } else {
                                                    echo $row["banque"];
                                                }
                                                echo "</td>
                                                        <td>" . $row["type_paiement"] . "</td>
                                                        <td>" . $row["cheque"] . "</td>
                                                        <td>" . $row["montant"] . "<strong>DH</strong></td>
                                                        <td>" . $row["lieu"] . "</td>";
                                                if ($_COOKIE['type_user'] == 1) {
                                                    echo "<td>
                                                                <div class=\"dropdown\">
                                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                                    </button>
                                                                    <div class=\"dropdown-menu\">
                                                                        <a class=\"dropdown-item editcotis\"  data-bs-toggle=\"modal\" data-bs-target=\"#cotisationup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\" data-id=" . $ide . "></i> Edit</a>
                                                                        <a class=\"dropdown-item\" href=cotisation.php?cotisation_del=" . $row["num"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
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
                                                    <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#cotisationup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
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
                            </div>
                        </div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle">

            </div>
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
    </div>
</body>

</html>