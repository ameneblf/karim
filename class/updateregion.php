<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="region.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">update Region</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col mb-0" style="display: none;">
                            <label class="form-label" for="basic-icon-default-phone">numero</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-hash"></i></span>
                                <input type="number" id="idregionup" required name="idregionup" class="form-control" placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">région</label>
                            <div class="input-group input-code">
                                <span id="basic-icon-code" class="input-group-text"><i class="bx bx-map-alt"></i></span>
                                <input type="text" required name="regionup" id="regionup" class="form-control" placeholder="XXXXX" aria-label="numreg" aria-describedby="basic-icon-default-numreg">
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
