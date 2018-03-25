<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="nis" class="col-md-3 control-label">NIS</label>
                        <div class="col-md-6">
                            <input type="text" id="nis" name="nis" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nama" class="col-md-3 control-label">Nama</label>
                      <div class="col-md-6">
                          <input type="nama" id="nama" name="nama" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                        <label for="foto" class="col-md-3 control-label">Foto</label>
                        <div class="col-md-6">
                            <input type="file" id="foto" name="foto" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div> -->
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Tambah</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal" id="modal-show" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id_show" name="id" disabled>
                    <div class="form-group">
                        <label for="nis" class="col-md-3 control-label">NIS</label>
                        <div class="col-md-6">
                            <input type="text" readonly id="nis_show" name="nis" class="form-control" autofocus required disabled>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nama" class="col-md-3 control-label">Nama</label>
                      <div class="col-md-6">
                          <input type="nama" readonly id="nama_show" name="nama" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <!-- <div class="form-group">
                      <label for="foto" class="col-md-3 control-label">Foto</label>
                      <div class="col-md-6">
                          <input type="foto" readonly id="foto_show" name="foto" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div> -->

                <div class="form-group">
                    <div class="col-md-6">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
