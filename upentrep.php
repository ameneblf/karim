<div class="modal fade" id="modalupdate" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Update Societe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col mb-0" style="display: none;">
                            <label class="form-label" for="basic-icon-default-user">registre</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-user" class="input-group-text"><i class="bx bx-rename"></i></span>
                                <input type="text" id="registre" name="registre" class="form-control" required placeholder="nome" placeholder="" aria-label="Nom">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-user">Nom</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-user" class="input-group-text"><i class="bx bx-rename"></i></span>
                                <input type="text" name="Nom" class="form-control" required placeholder="nome" placeholder="" aria-label="Nom">
                            </div>
                        </div>
                        <div class=" col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">sigle</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-default-phone" class="input-group-text"><i class="bx bx-pen"></i></span>
                                <input type="text" name="sigle" id="basic-icon-phone" placeholder="SIGLE" class="form-control" placeholder="" aria-label="Telephone" aria-describedby="basic-icon-default-sigle">
                            </div>
                        </div>
                        <div class=" row g-2">
                            <div class="col mb-0">
                                <label class="form-label" for="basic-icon-default-user">telephone</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-user" class="input-group-text"><i class="bx bx-mobile"></i></span>
                                    <input type="text" name="telephone" placeholder="(06|05|08|07)XXXXXXXX" class="form-control" placeholder="" aria-label="telephone">
                                </div>
                            </div>
                            <div class=" col mb-0">
                                <label class="form-label" for="basic-icon-default-phone">fax</label>
                                <div class="input-group input-group-phone">
                                    <span id="basic-icon-default-phone" class="input-group-text"><i class="bx bx-phone"></i></span>
                                    <input type="text" pattern="(06|05|08|07)[0-9]{8}" name="fax" required id="basic-icon-phone" class="form-control" placeholder="(06|05|08|07)XXXXXXXX" aria-label="Telephone" aria-describedby="basic-icon-default-Telephone">
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label class="form-label" for="basic-icon-default-map-alt">Région</label>
                                <div class="input-group input-group-phone">
                                    <span id="basic-icon-map-alt" class="input-group-text"><i class="bx bx-map-alt"></i></span>
                                    <select  required name="region" id="regionup" class="form-select">
                                    <option value=" 0 ">Sélection par défaut</option>
                                        <?php
                                        $region1 = "SELECT * FROM `region`";
                                        $region1 = mysqli_query($conn, $region1);
                                        if (mysqli_num_rows($region1) > 0) {
                                            while ($row5 = mysqli_fetch_assoc($region1)) {
                                                echo "<option value=" . $row5["code"] . ">" . $row5["nom"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-map">Ville</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                                <select id="villeup" required name="ville" class="form-select">
                                </select>
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Adresse</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-location-plus" class="input-group-text"><i class="bx bx-location-plus"></i></span>
                                <textarea type="text" required id="basic-icon-default-location-plus" name="Adresse" class="form-control" placeholder="Adresse" aria-label="Adresse" aria-describedby="basic-icon-default-Adresse"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2" style="margin-bottom: calc(2.5 * var(--bs-gutter-x));">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-mail">E-mail 1</label>
                            <div class="input-group input-group-mail">
                                <span id="basic-icon-default-at" class="input-group-text"><i class="bx bx-at"></i></span>
                                <input type="mail" id=" basic-icon-default-at" pattern="[A-z0-9._%+-]+(@)[a-z0-9.-]+.[a-z]{2, 4}" name="mail" class="form-control" placeholder="john@example.com" aria-label="mail" aria-describedby="basic-icon-default-Adresse">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-mail">E-mail 2</label>
                            <div class="input-group input-group-mail">
                                <span id="basic-icon-default-at" class="input-group-text"><i class="bx bx-at"></i></span>
                                <input type="mail" placeholder="john@example.com" name="mail_sec" class="form-control" id="basic-icon-default-at" aria-label="mail" aria-describedby="basic-icon-default-Adresse">
                            </div>
                        </div>
                    </div>
                    <div class=" col mb-0">
                        <label class="form-label" for="basic-icon-default-map-alt">Forme Juridique</label>
                        <div class="input-group input-git-repo-forked">
                            <span id="basic-icon-git-repo-forked" class="input-group-text"><i class="bx bx-git-repo-forked"></i></span>
                            <select id="defaultSelect" required name="juridique" class="form-select">
                                <?php
                                $juridique = "SELECT * FROM `juridique`";
                                $juridique = mysqli_query($conn, $juridique);
                                if (mysqli_num_rows($juridique) > 0) {
                                    while ($row5 = mysqli_fetch_assoc($juridique)) {
                                        echo "<option value=" . $row5["code"] . ">" . $row5["nom"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-Patent">Patente</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-code"></i></span>
                                <input type="text" required="" name="Patent" id="basic-icon-code" class="form-control" placeholder="XXXXX" aria-label="Patent" aria-describedby="basic-icon-default-Patent">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-ICE">ICE</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-code"></i></span>
                                <input type="text" required="" name="ICE" id="basic-icon-code" class="form-control" placeholder="XXXXX" aria-label="ICE" aria-describedby="basic-icon-default-ICE">
                            </div>
                        </div>
                        <div class=" col mb-0">
                            <label class="form-label" for="basic-icon-default-ifd">Identifion Fiscal</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-code"></i></span>
                                <input type="text" name="IF" id="basic-icon-code" class="form-control" placeholder="XXXXX" aria-label="IF" aria-describedby="basic-icon-default-ICE">
                            </div>
                        </div>
                    </div>
                    <div class=" row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-user">Ingénieur</label>
                            <div class="input-group input-user">
                                <span id="basic-icon-user" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="number" min="0" max="1000" required="" name="ingenieur" placeholder="XX" id="basic-icon-user" class="form-control" aria-label="user" aria-describedby="basic-icon-default-user">
                            </div>
                        </div>
                        <div class=" col mb-0">
                            <label class="form-label" for="basic-icon-default-user">Cadre</label>
                            <div class="input-group input-user">
                                <span id="basic-icon-user" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input min="0" max="1000" type="number" name="cadre" placeholder="XX" id="basic-icon-user" class="form-control" aria-label="user" aria-describedby="basic-icon-default-user">
                            </div>
                        </div>

                    </div>
                    <div class=" row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Technicien</label>
                            <div class="input-group input-group-user">
                                <span id="basic-icon-user" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input min="0" max="1000" type="number" name="techn" id="basic-icon-user" class="form-control" placeholder="XX" aria-label="user" aria-describedby="basic-icon-default-user">
                            </div>
                        </div>
                        <div class=" col mb-0">
                            <label class="form-label" for="basic-icon-default-dollar">Capitale</label>
                            <div class="input-group input-dollar">
                                <span id="basic-icon-dollar" class="input-group-text"><i class="bx bx-dollar"></i></span>
                                <input type="number" name="capitale" min="0" id="basic-icon-dollar" class="form-control" placeholder="0000000000" aria-label="Capitale" aria-describedby="basic-icon-default-Telephone">
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-dollar">N° CNSS</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-code"></i></span>
                                <input type="number" required="" name="cnss" id="basic-icon-code" class="form-control" placeholder="000000" aria-label="CNSS" aria-describedby="basic-icon-default-Telephone">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="html5-datetime-local-input" class="form-label">Date de création</label>
                            <div class="col-md-10">
                                <input class="form-control" name="datedeceation" type="date" value="" id="html5-datetime-local-input">
                                <input style="display:none;" class="form-control" name="datedeceation" type="text" value="" id="html5-datetime-local-input">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0" style="margin-top: 8px;">
                        <button type="submit" name="updatesociete" class="btn btn-primary">éditer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>