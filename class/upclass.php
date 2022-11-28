<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;"
        role="document">
        <form action="GesClasses.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">modifier Classe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="col mb-0" style="display: none;">
                        <label class="form-label" for="basic-icon-default-phone">code</label>
                        <div class="input-group input-code">
                            <span id="basic-icon-code" class="input-group-text"><i class="bx bx-hash"></i></span>
                            <input type="text" required name="codeup" id="codeup" class="form-control"
                                placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">nom</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bxs-rename"></i></span>
                                <input type="text" required name="nomup" id="nomup" class="form-control"
                                    placeholder="XXXXX" aria-label="numreg"
                                    aria-describedby="basic-icon-default-numreg">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-map-alt">direction</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-directions" class="input-group-text"><i
                                        class="bx bx-directions"></i></span>
                                <select required name="directionup" id="directionup" class="form-select">
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
                            <label class="form-label" for="basic-icon-default-map-alt">ministère</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-briefcase-alt-2" class="input-group-text"><i
                                        class="bx bx-briefcase-alt-2"></i></span>
                                <select required name="ministereup" id="ministereup" class="form-select">
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
                            <label class="form-label" for="basic-icon-default-map-alt">Secteur</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-category" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <select required name="Secteurup" id="Secteurup" class="form-select">
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
                            <label class="form-label" for="basic-icon-default-company">Chiffre D'affaires</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text">>=</span>
                                <input type="number" required name="CAup" id="CAup" class="form-control"
                                    min="0" placeholder="XXXXX" aria-label="CA"
                                    aria-describedby="basic-icon-default-CA">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Capital social</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text">>=</span>
                                <input type="number" min="0" required name="CSup" id="CSup"
                                    class="form-control" placeholder="XXXXX" aria-label="CA"
                                    aria-describedby="basic-icon-default-CA">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Nombre
                            Minimum
                            D'Ingénieurs</label>
                        <div class="input-group input-nbing">
                            <span id="basic-icon-code" class="input-group-text"><i class='bx bx-user-circle'></i></span>
                            <input type="number" min="0" required name="nbingup" id="nbingup" class="form-control"
                                placeholder="XXXXX" aria-label="nbing" aria-describedby="basic-icon-default-nbing">
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Technicien</label>
                        <div class="input-group input-nbing">
                            <span id="basic-icon-code" class="input-group-text"><i class='bx bx-user-circle'></i></span>
                            <input type="number" required name="nbtup" id="nbtup" class="form-control" min="0"
                                placeholder="XXXXX" aria-label="nbt" aria-describedby="basic-icon-default-nbing">
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Note
                            minimale d'encadrement</label>
                        <div class="input-group input-nbing">
                            <span id="basic-icon-code" class="input-group-text"><i class='bx bx-user-circle'></i></span>
                            <input type="number" required name="nmeup" id="nmeup" class="form-control" min="0"
                                placeholder="XXXXX" aria-label="nme" aria-describedby="basic-icon-default-nbing">
                        </div>
                    </div>
                </div>
                
                <div class="col mb-2">
                    <button type="submit" name="updateClass" class="btn btn-primary">modifier</button>
                </div>
            </div>
        </form>
    </div>
</div>