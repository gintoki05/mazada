 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pencarian...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigasi Utama</li>
          <li>
            <a href="{{ url('/') }}">
              <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/datatahun') }}">
              <i class="fa fa-th"></i> <span>Data Tahun Akademik</span>
            </a>
          </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/datasiswa') }}"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="{{ url('/datasiswaaktif') }}"><i class="fa fa-circle-o"></i> Data Siswa Aktif</a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-id-badge"></i>
            <span>Data Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/pegawai') }}"><i class="fa fa-circle-o"></i> Pegawai</a></li>
            <li><a href="{{ url('/guru') }}"><i class="fa fa-circle-o"></i> Guru</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Data Mata Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/pegawai') }}"><i class="fa fa-circle-o"></i> Mata Pelajaran</a></li>
            <li><a href="{{ url('/guru') }}"><i class="fa fa-circle-o"></i> KKM</a></li>
          </ul>
        </li>
        <li>
            <a href="{{ url('/datakelas') }}">
              <i class="fa fa-users"></i> <span>Data Wali Kelas</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/datakelas') }}">
              <i class="fa fa-university"></i> <span>Data Kelas Ajar</span>
            </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Data Jadwal Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/pegawai') }}"><i class="fa fa-circle-o"></i> Manajemen Jadwal</a></li>
            <li><a href="{{ url('/guru') }}"><i class="fa fa-circle-o"></i> Jadwal Guru</a></li>
            <li><a href="{{ url('/guru') }}"><i class="fa fa-circle-o"></i> Manajemen Sesi</a></li>
          </ul>
        </li>
        <li>
            <a href="{{ url('/datakelas') }}">
              <i class="fa fa-folder"></i> <span>Data Silabus</span>
            </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>