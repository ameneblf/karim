<?php

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
?>

<div class="modal fade " id="cotisationup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="cotisation.php" method="get">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Edite Cotisation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="col mb-0" style="display: none;">
                            <label class="form-label" for="basic-icon-default-phone">ref</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-calendar" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <input type="number" name="ref" id="ref" class="form-control" placeholder="XXXXX" aria-label="date" aria-describedby="basic-icon-default-date">
                            </div>
                        </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Date</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-calendar" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <input type="date" name="date" id="dateup" class="form-control" placeholder="XXXXX" aria-label="date" aria-describedby="basic-icon-default-date">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-note">Lieu</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                                <input type="text" name="Lieu" id="lieuup" class="form-control" placeholder="XXXXX" aria-label="map" aria-describedby="basic-icon-default-lieu">
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">type de paiement</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-money-withdraw" class="input-group-text"><i class="bx bx-money-withdraw"></i></span>
                                <select id="type_pai" required name="type_pai" class="form-select">
                                    <option value="cheque">Cheque</option>
                                    <option value="lcn">LCN</option>
                                    <option value="virement">Virement</option>
                                    <option value="versement">Versement</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-0" id="bq">
                            <label class="form-label" for="basic-icon-default-bank">Banque</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-calendar" class="input-group-text"><i class="bx bxs-bank"></i></span>
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
                                        echo "Error: "  . $conn->error;
                                    };
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0" id="nbch">
                            <label class="form-label" for="basic-icon-default-note">N Cheque</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-dollar" class="input-group-text"><i class="bx bx-code"></i></span>
                                <input type="text" name="nb_cheque" id="nb_cheque" class="form-control" placeholder="XXXXX" aria-label="code" aria-describedby="basic-icon-default-code">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-note">Montant</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-dollar" class="input-group-text"><i class="bx bx-dollar"></i></span>
                                <input type="number" min="0" name="montant" required id="montant" class="form-control" placeholder="XXXXX" aria-label="dollar" aria-describedby="basic-icon-default-montant">
                            </div>
                        </div>
                    </div>

                    <div class="col mb-0" style="margin-top: 9px;">
                        <div class="input-group input-group-merge">
                            <button type="submit" name="modifierco" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>