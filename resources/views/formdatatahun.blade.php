<div class="modal" id="modal-tahun" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-data" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

             {{--     <div class="modal-body">
                    <input type="hidden" id="id_tahun" name="id_tahun">
                    <div class="form-group">
                        <label for="id_tahun" class="col-md-3 control-label">ID</label>
                        <div class="col-md-6">
                            <input type="text" id="id_tahun" name="id_tahun" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  --}}
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="tahun" class="col-md-3 control-label">Tahun</label>
                      <div class="col-md-6">
                          <input type="text" id="tahun" name="tahun" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                        <label for="semester" class="col-md-3 control-label">Semester</label>
                        <div class="col-md-6">
                            <input type="text" id="semester" name="semester" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div> 
                 <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Tambah</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </div>
            
           

            </form>
        </div>
    </div>
</div>
