<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;"
        role="document">
        <form action="GesQulif.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">éditer qualification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="col mb-0" style="display: none;">
                        <label class="form-label" for="basic-icon-default-phone">code</label>
                        <div class="input-group input-code">
                            <span id="basic-icon-code" class="input-group-text"><i class="bx bx-hash"></i></span>
                            <input type="text" required name="code" id="upcode" class="form-control" placeholder="XXXXX"
                                aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">nom</label>
                        <div class="input-group input-code">
                            <span id="basic-icon-code" class="input-group-text"><i class="bx bxs-rename"></i></span>
                            <input type="text" required name="nom" id="nomup" class="form-control" placeholder="XXXXX"
                                aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-map-alt">Secteur</label>
                        <div class="input-group input-group-phone">
                            <span id="basic-icon-category" class="input-group-text"><i
                                    class="bx bx-category"></i></span>
                            <select required name="Secteur" id="Secteur" class="form-select">
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

                    <div class="col mb-0" style="margin-top: 9px;">
                        <button type="submit" name="update" class="btn btn-primary">éditer</button>
                    </div>
                </div>
        </form>
    </div>
</div>