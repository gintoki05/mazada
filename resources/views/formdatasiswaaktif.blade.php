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
                    <input type="hidden" id="id_show" name="id_nis_aktif">
                    <div class="form-group">
                        <label for="nis" class="col-md-3 control-label">NIS</label>
                        <div class="col-md-6">
                            <input type="text" id="nis_show" name="nis" class="form-control" autofocus required disabled>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nama" class="col-md-3 control-label">Nama</label>
                      <div class="col-md-6">
                          <input type="text" id="nama_show" name="nama" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="tempat_lahir" class="col-md-3 control-label">Tempat Lahir</label>
                      <div class="col-md-6">
                          <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="tanggal_lahir" class="col-md-3 control-label">Tanggal Lahir</label>
                      <div class="col-md-6">
                          <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin</label>
                      <div class="col-md-6">
                          <input type="text" placeholder="Pria/Wanita" id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="agama" class="col-md-3 control-label">Agama</label>
                      <div class="col-md-6">
                          <input type="text" id="agama" name="agama" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="sekolah_asal" class="col-md-3 control-label">Sekolah Asal</label>
                      <div class="col-md-6">
                          <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="kelas_diterima" class="col-md-3 control-label">Kelas Diterima</label>
                      <div class="col-md-6">
                          <input type="text" id="kelas_diterima" name="kelas_diterima" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="tgl_diterima" class="col-md-3 control-label">Tanggal Diterima</label>
                      <div class="col-md-6">
                          <input type="date" id="tgl_diterima" name="tgl_diterima" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="alamat" class="col-md-3 control-label">Alamat</label>
                      <div class="col-md-6">
                          <input type="text" id="alamat" name="alamat" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="nama_ayah" class="col-md-3 control-label">Nama Ayah</label>
                      <div class="col-md-6">
                          <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="nama_ibu" class="col-md-3 control-label">Nama Ibu</label>
                      <div class="col-md-6">
                          <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="pekerjaan_ayah" class="col-md-3 control-label">Pekerjaan Ayah</label>
                      <div class="col-md-6">
                          <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="pekerjaan_ibu" class="col-md-3 control-label">Pekerjaan Ibu</label>
                      <div class="col-md-6">
                          <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="alamat_ortu" class="col-md-3 control-label">Alamat Orang Tua</label>
                      <div class="col-md-6">
                          <input type="text" id="alamat_ortu" name="alamat_ortu" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="nama_wali" class="col-md-3 control-label">Nama Wali</label>
                      <div class="col-md-6">
                          <input type="text" id="nama_wali" name="nama_wali" class="form-control" >
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="alamat_wali" class="col-md-3 control-label">Alamat Wali</label>
                      <div class="col-md-6">
                          <input type="text" id="alamat_wali" name="alamat_wali" class="form-control" >
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
{{--  Tampilkan Data  --}}
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
                    <input type="hidden" id="id_show" name="id_nis_aktif" disabled>
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

                     <div class="form-group">
                      <label for="tempat_lahir" class="col-md-3 control-label">Tempat Lahir</label>
                      <div class="col-md-6">
                          <input type="tempat_lahir" readonly id="tempat_lahir" name="tempat_lahir" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="tanggal_lahir" class="col-md-3 control-label">Tanggal Lahir</label>
                      <div class="col-md-6">
                          <input type="tanggal_lahir" readonly id="tanggal_lahir" name="tanggal_lahir" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin</label>
                      <div class="col-md-6">
                          <input type="jenis_kelamin" readonly id="jenis_kelamin" name="jenis_kelamin" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="agama" class="col-md-3 control-label">Agama</label>
                      <div class="col-md-6">
                          <input type="agama" readonly id="agama" name="agama" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="sekolah_asal" class="col-md-3 control-label">Sekolah Asal</label>
                      <div class="col-md-6">
                          <input type="sekolah_asal" readonly id="sekolah_asal" name="sekolah_asal" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="kelas_diterima" class="col-md-3 control-label">Kelas Diterima</label>
                      <div class="col-md-6">
                          <input type="kelas_diterima" readonly id="kelas_diterima" name="kelas_diterima" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="tgl_diterima" class="col-md-3 control-label">Tanggal Diterima</label>
                      <div class="col-md-6">
                          <input type="tgl_diterima" readonly id="tgl_diterima" name="tgl_diterima" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="alamat" class="col-md-3 control-label">Alamat</label>
                      <div class="col-md-6">
                          <input type="alamat" readonly id="alamat" name="alamat" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="nama_ayah" class="col-md-3 control-label">Nama Ayah</label>
                      <div class="col-md-6">
                          <input type="nama_ayah" readonly id="nama_ayah" name="nama_ayah" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="nama_ibu" class="col-md-3 control-label">Nama Ibu</label>
                      <div class="col-md-6">
                          <input type="nama_ibu" readonly id="nama_ibu" name="nama_ibu" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="pekerjaan_ayah" class="col-md-3 control-label">Pekerjaan Ayah</label>
                      <div class="col-md-6">
                          <input type="pekerjaan_ayah" readonly id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="pekerjaan_ibu" class="col-md-3 control-label">Pekerjaan Ibu</label>
                      <div class="col-md-6">
                          <input type="pekerjaan_ibu" readonly id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="alamat_ortu" class="col-md-3 control-label">Alamat Orang Tua</label>
                      <div class="col-md-6">
                          <input type="alamat_ortu" readonly id="alamat_ortu" name="alamat_ortu" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="nama_wali" class="col-md-3 control-label">Nama Wali</label>
                      <div class="col-md-6">
                          <input type="nama_wali" readonly id="nama_wali" name="nama_wali" class="form-control" required disabled>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="alamat_wali" class="col-md-3 control-label">Alamat Wali</label>
                      <div class="col-md-6">
                          <input type="alamat_wali" readonly id="alamat_wali" name="alamat_wali" class="form-control" required disabled>
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
