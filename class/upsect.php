<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="secteurs.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">modifier secteur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-phone">code</label>
                        <div class="input-group input-code">
                            <span id="basic-icon-code" class="input-group-text"><i class="bx bx-hash"></i></span>
                            <input type="text" required name="codeup" id="upcode" class="form-control" placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">nom</label>
                        <div class="input-group input-code">
                            <span id="basic-icon-code" class="input-group-text"><i class="bx bxs-rename"></i></span>
                            <input type="text" required name="nomup" id="nomup" class="form-control" placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-map-alt">ministère</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-briefcase-alt-2" class="input-group-text"><i class="bx bx-briefcase-alt-2"></i></span>
                                <select required name="ministereup" id="ministere" class="form-select">
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
                            <label class="form-label" for="basic-icon-default-map-alt">catégorie</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-category" class="input-group-text"><i class="bx bx-category"></i></span>
                                <select required name="categup" id="categ" class="form-select">
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
                    <div class="col mb-0" style="margin-top: 9px;">
                        <button type="submit" name="updatesec" class="btn btn-primary">modifier</button>
                    </div>
                </div>
        </form>
    </div>
</div>