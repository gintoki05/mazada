 @extends('layout.index')
 @section('title' ,'Data Siswa')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Siswa Aktif
        <small>Ma'had Zaadul Maad</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/datasiswaaktif')}}">Data Siswa Aktif</a></li>
        <li class="active">Detail Siswa Aktif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
          <table>
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $data->id_nis_aktif }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tempat_lahir }}</td>
                    </tr>
            </tbody>
        </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop
  