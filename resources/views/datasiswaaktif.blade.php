 @extends('layout.index')
 @section('title' ,'Data Siswa Aktif')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MAZADA
        <small>Data Siswa Aktif</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa Aktif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-child"></i><b>&nbsp;Data Siswa Aktif</b></h3>
               <div class="w-100"></div>
               <div class="col-sm-4">
              <a onclick="addForm()" class="btn btn-block btn-primary ">Tambah Data Siswa</a>
              </div>
               <div class="col-sm-4">  
              <a href="{{ url('/exportpdf') }}" target="_blank" class="btn btn-block btn-primary">Cetak Data</a>     
              </div>          
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datasiswaaktif" class="table table-bordered table-hover" width="100%">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th></th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @include('formdatasiswaaktif')
  </div>

  <!-- /.content-wrapper -->
  @stop
  