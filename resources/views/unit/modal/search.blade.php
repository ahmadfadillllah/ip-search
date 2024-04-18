<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cari Unit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('unit.search') }}" method="get">
                @csrf
                <div class="card-body">
                    <div class="basic-form">
                        <div class="mb-3">
                            <textarea class="form-control" style="height: 500px" id="comment"
                                placeholder="Masukkan IP" name="ip"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
