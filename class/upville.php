<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="ville.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">update Ville</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col mb-0" style="display: none;">
                            <label class="form-label" for="basic-icon-default-phone">numero</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-hash"></i></span>
                                <input type="text" id="idvilleup" required name="idvilleup" class="form-control" placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Ville</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-map-alt"></i></span>
                                <input type="text" required name="villeup" id="villeup" class="form-control" placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-map-alt">Région</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-map-alt" class="input-group-text"><i class="bx bx-map-alt"></i></span>
                                <select required name="regionvilleup" id="regionvilleup" class="form-select">
                                    <option value="0 ">Sélection par défaut</option>
                                    <?php
                                    $qregion = "SELECT * FROM `region`";
                                    $region = mysqli_query($conn, $qregion);
                                    if (mysqli_num_rows($region) > 0) {
                                        while ($row = mysqli_fetch_assoc($region)) {
                                            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0" style="margin-top: 9px;">
                        <button type="submit" name="modifier" class="btn btn-primary">modifier</button>
                    </div>
                </div>
        </form>
    </div>
</div>