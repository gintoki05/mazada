 @extends('layout.index')
 @section('title' ,'Data Tahun Akademik')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MAZADA
        <small>Data Tahun Akademik</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Tahun Akademik</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-child"></i><b>&nbsp;Data Tahun Akademik</b></h3>
                <div class="col-sm-4 pull-right">
                  <a onclick="addTahun()" class="btn btn-block btn-primary">Tambah Data Tahun</a>
            </div>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatahun" class="table table-bordered table-hover" width="100%">
                <thead>
                <tr>
                  <th width="30">No</th>
                  <th>Tahun</th>
                  <th>Semester</th>
                  <th>Status</th>
                  <th>Aktivasi</th>
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
@include('formdatatahun')
</div>
  <!-- /.content-wrapper -->
  @stop
  