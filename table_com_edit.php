<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;"
        role="document">
        <form action="table_com.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Etude de la demande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-user">N° Certificat</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-dots-vertical-rounded" class="input-group-text"><i class="bx bx-dots-vertical-rounded"></i></span>
                            <input type="text" required id="N_Certificat" name="N_Certificat" class="form-control" placeholder="N° Certificat" aria-label="N_Certificat" >
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-user">Date</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-dots-vertical-rounded" class="input-group-text"><i class="bx bx-dots-vertical-rounded"></i></span>
                            <input type="date" required id="date" name="date" class="form-control" placeholder="date validation" aria-label="date validation" >
                        </div>
                    </div>
                    <br>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Dossier administratif</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked1" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked1">Moyens financiers et chiffre d'affaires</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked2" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked2">Moyens Humains</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked3" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked3">Moyens materiels</label>
                    </div>
                    <div id="motif">
                        <label for="exampleFormControlTextarea1" class="form-label">motif</label>
                        <textarea class="form-control" id="motifval" name="motif" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="text-end mb-3">
                        <button type="button" id="valid" name="valid" class="  btn btn-outline-primary">valide</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
