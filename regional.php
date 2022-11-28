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
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <form action="Demande.php" id="form" method="post">
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
                            $('#city').change(function () {
                                var city = $(this).val();
                                var region = $('#region2').val()
                                if (city) {
                                    $.get(
                                        "societeselect.php", {
                                        region: region,
                                        city: city
                                    },
                                        function (data) {
                                            //console.log(data);
                                            $('#Entreprise').html(data);
                                        }
                                    );
                                } else {
                                    $("#Entreprise").empty();
                                }
                                //console.log(region + " " + city);
                            });
                            $('#Secteur').change(function () {
                                var Secteur = $(this).val();
                                var radio = $("input[name='Fonction']:checked").val();
                                console.log(Secteur);
                                if (Secteur) {
                                    $.get(
                                        "societeselect.php", {
                                        Secteur: Secteur
                                    },
                                        function (data) {
                                            $('#table').html(data);
                                        }
                                    );
                                    $.get(
                                        "societeselect.php", {
                                        Secteurcheck: Secteur
                                    },
                                        function (data) {
                                            $('#radio').html(data);
                                        }
                                    );
                                    $.get(
                                        "Gclass.php", {
                                        secteur: Secteur,
                                        radio: radio
                                    },
                                        function (data) {
                                            //console.log(data);
                                            $('#Classe').html(data);
                                        }
                                    );
                                } else {
                                    $("#table").empty();
                                    $("#Classe").empty();
                                    $("#radio").empty();
                                }

                                //console.log(region + " " + city);
                            });
                            $('#radio').change(function () {
                                var radio = $("input[name='Fonction']:checked").val();
                                var Secteur = $('#Secteur').val();
                                if (Secteur) {
                                    $.get(
                                        "Gclass.php", {
                                        secteur: Secteur,
                                        radio: radio
                                    },
                                        function (data) {
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
                            <span id="basic-icon-buildings" class="input-group-text"><i
                                    class="bx bx-buildings"></i></span>
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
                            <span id="basic-icon-git-pull-request" class="input-group-text"><i
                                    class="bx bx-git-pull-request"></i></span>
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
                            <span id="basic-icon-intersect" class="input-group-text"><i
                                    class="bx bx-intersect"></i></span>
                            <select id="Secteur" required name="Secteur" class="form-select">
                                <?php
                                $querys = "select * FROM `secteur` where type_minister = 'E'";
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
                        <div class="col-md" id="radio" >
                            
                        </div>
                    </div>
                    <div class="col mb-0">
                        <div class="col mb-0">
                            <label class="form-label" for="Secteur">Classe</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-intersect" class="input-group-text"><i
                                        class="bx bx-intersect"></i></span>
                                <select id="Classe" required name="Classe" class="form-select">
                                    <option value="0">Sélection par défaut</option>
                                </select>
                            </div>
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