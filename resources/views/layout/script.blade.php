<!-- jQuery 3 -->
<script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ URL::asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('bower_components/chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- DataTables -->
<script src="{{ URL::asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Validator -->
<script src="{{ asset('assets/validator/validator.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>

{{--  Data Tahun Akademik  --}}
<script type="text/javascript">
      var table = $('#datatahun').DataTable({
                      processing: false,
                      serverSide: true,
                      ajax: "{{ url ('data-tahun') }}",
                      columns: [
                        {data: 'id_tahun', name: 'id_tahun'},
                        {data: 'tahun', name: 'tahun'},
                        {data: 'semester', name: 'semester'},
                        {data: 'status', data: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });

    function addTahun() {
      save_method = "add";
      $('input[name=_method]').val('POST');
      $('#modal-tahun').modal('show');
      $('#modal-tahun form')[0].reset();
      $('.modal-title').text('Tambah Data Tahun');
    }
    

    function editTahun(id_tahun) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-tahun form')[0].reset();
        $.ajax({
          url: "{{ url('datatahun') }}" + '/' + id_tahun + "/edit",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-tahun').modal('show');
            $('.modal-title').text('Edit Data Tahun');
            $('#tahun').val(data.tahun);
            $('#semester').val(data.semester);
          },
          error : function() {
              alert("Tidak Ada Data Tahun");
          }
        });
      }

    $(function(){
            $('#modal-tahun form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id_tahun = $('#id_tahun').val();
                    if (save_method == 'add') url = "{{ url('datatahun') }}";
                    else url = "{{ url('datatahun') . '/' }}" + id_tahun;

                    $.ajax({
                        url : url,
                        type : "POST",
                        data: new FormData($("#modal-tahun form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-tahun').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Berhasil!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Gagal',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });
</script>


<!-- Data Siswa Aktif -->
<script type="text/javascript">
      var table = $('#datasiswaaktif').DataTable({
                      processing: false,
                      serverSide: true,
                      ajax: "{{ url ('data-siswa-aktif') }}",
                      columns: [
                        {data: 'id_nis_aktif', name: 'id_nis_aktif'},
                        {data: 'show_foto', name: 'show_foto'},
                        {data: 'nama', name: 'nama'},
                        {data: 'tempat_lahir', name: 'tempat_lahir'},
                        {data: 'tgl_lahir', name: 'tgl_lahir'},
                        {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                        {data: 'alamat', name: 'alamat'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });

    function addForm() {
      save_method = "add";
      $('input[name=_method]').val('POST');
      $('#modal-form').modal('show');
      $('#modal-form form')[0].reset();
      $('.modal-title').text('Tambah Data Siswa');
    }

    function showData(id_nis_aktif) {
        save_method = 'show';
        $('input[name=_method]').val('GET');
        $('#modal-show form')[0].reset();
        $.ajax({
          url: "{{ url('datasiswaaktif') }}" + '/' + id_nis_aktif,
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-show').modal('show');
            $('.modal-title').text('Tampilkan Data Siswa');
            $('#nis_show').val(data.id_nis_aktif);
            $('#nama_show').val(data.nama);
            $('#show_foto').val(data.foto);
            $('#tempat_lahir').val(data.tempat_lahir);
            $('#tanggal_lahir').val(data.tgl_lahir);
            $('#jenis_kelamin').val(data.jenis_kelamin);
            $('#agama').val(data.agama);
            $('#sekolah_asal').val(data.sekolah_asal);
            $('#kelas_diterima').val(data.kelas_diterima);
            $('#tgl_diterima').val(data.tgl_diterima);
            $('#alamat').val(data.alamat);
            $('#nama_ayah').val(data.nama_ayah);
            $('#nama_ibu').val(data.nama_ibu);
            $('#pekerjaan_ayah').val(data.pekerjaan_ayah);
            $('#pekerjaan_ibu').val(data.pekerjaan_ibu);
            $('#alamat_ortu').val(data.alamat_ortu);
            $('#nama_wali').val(data.nama_wali);
            $('#alamat_wali').val(data.alamat_wali);
          },
          error : function() {
              alert("Tidak Ada Data Siswa");
          }
        });
        }
    

    function editForm(id_nis_aktif) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
          url: "{{ url('datasiswaaktif') }}" + '/' + id_nis_aktif + "/edit",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-form').modal('show');
            $('.modal-title').text('Edit Data Siswa');
            $('#nis_show').val(data.id_nis_aktif);
            $('#nama_show').val(data.nama);
            $('#show_foto').val(data.foto);
            $('#tempat_lahir').val(data.tempat_lahir);
            $('#tanggal_lahir').val(data.tgl_lahir);
            $('#jenis_kelamin').val(data.jenis_kelamin);
            $('#agama').val(data.agama);
            $('#sekolah_asal').val(data.sekolah_asal);
            $('#kelas_diterima').val(data.kelas_diterima);
            $('#tgl_diterima').val(data.tgl_diterima);
            $('#alamat').val(data.alamat);
            $('#nama_ayah').val(data.nama_ayah);
            $('#nama_ibu').val(data.nama_ibu);
            $('#pekerjaan_ayah').val(data.pekerjaan_ayah);
            $('#pekerjaan_ibu').val(data.pekerjaan_ibu);
            $('#alamat_ortu').val(data.alamat_ortu);
            $('#nama_wali').val(data.nama_wali);
            $('#alamat_wali').val(data.alamat_wali);
            $('#foto').val(data.foto);
          },
          error : function() {
              alert("Tidak Ada Data Siswa");
          }
        });
      }

    function deleteData(id_nis_aktif){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Yakin Mau Hapus Data?',
              text: "Setelah Dihapus, Data Akan Hilang Permanen",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Ya, Hapus!'
          }).then(function () {
              $.ajax({
                  url : "{{ url('datasiswaaktif') }}" + '/' + id_nis_aktif,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                      table.ajax.reload();
                      swal({
                          title: 'Berhasil Hapus!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                      })
                  },
                  error : function () {
                      swal({
                          title: 'Gagal',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
          });
        }

    $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id_nis_aktif = $('#id_nis_aktif').val();
                    if (save_method == 'add') url = "{{ url('datasiswaaktif') }}";
                    else url = "{{ url('datasiswaaktif') . '/' }}" + id_nis_aktif;

                    $.ajax({
                        url : url,
                        type : "POST",
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Berhasil!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Gagal',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });
</script>

