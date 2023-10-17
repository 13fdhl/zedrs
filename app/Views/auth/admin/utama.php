<!DOCTYPE html>
<html>

<head>

  <!-- Title -->
  <title>Dashboard</title>

  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta charset="UTF-8">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="MOT" />
  <link rel="shortcut icon" href="<?=base_url()?>assets/csslogin/ptpp-icon.png">

  <!-- Styles -->
  <link href="<?php echo base_url().'assets/plugins/pace-master/themes/blue/pace-theme-flash.css'?>" rel="stylesheet" />
  <link href="<?php echo base_url().'assets/plugins/uniform/css/uniform.default.min.css'?>" rel="stylesheet" />
  <link href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css"
    media="screen,print" />
  <link href="<?php echo base_url().'assets/plugins/fontawesome/css/font-awesome.css'?>" rel="stylesheet"
    type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/line-icons/simple-line-icons.css'?>" rel="stylesheet"
    type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css'?>" rel="stylesheet"
    type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/waves/waves.min.css'?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/switchery/switchery.min.css'?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/3d-bold-navigation/css/style.css'?>" rel="stylesheet"
    type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/slidepushmenus/css/component.css'?>" rel="stylesheet"
    type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/weather-icons-master/css/weather-icons.min.css'?>" rel="stylesheet"
    type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/metrojs/MetroJs.min.css'?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url().'assets/plugins/toastr/toastr.min.css'?>" rel="stylesheet" type="text/css" />

  <!-- Theme Styles -->
  <link href="<?php echo base_url().'assets/css/modern.min.css'?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url().'assets/css/themes/green.css'?>" class="theme-color" rel="stylesheet"
    type="text/css" />
  <!--<link href="<?php echo base_url().'assets/css/custom.css'?>" rel="stylesheet" type="text/css"/>-->

  <?=$_styles?>

  <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/modernizr.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js'?>"></script>
  <link href="<?php echo base_url().'assets/vendor/noto-sans-javanese/stylesheet.css'?>" class="theme-color"
    rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url().'assets/plugins/jquery/jquery-2.1.4.min.js'?>"></script>

  <style media="screen,print">
    .CodeMirror-code>div {
      font-family: "Noto Sans Javanese", sans-serif;
      line-height: 2;
    }

    .CodeMirror-wrap pre.CodeMirror-line {
      padding-bottom: 20px;
    }

    /* Post Comments */

    .comments-section {
      display: block;
      margin: 5px auto;
    }

    .comments-list {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .comments-list li.comment {
      margin-top: 2em;
    }

    .comments-list li>div.comment-body {
      background-color: #FFFFFF;
      border: 1px solid #E1E1E1;
      margin: 0;
      overflow: hidden;
      padding: 25px 25px 20px 60px;
      position: relative;
    }

    .user-avatar {
      float: left;
      height: 51px;
      line-height: 76px;
      padding: 5px;
      text-align: center;
      width: 51px;
    }

    .comments-list li.comment>div .user-avatar {
      left: -30px;
      position: relative;
    }

    .user-avatar img {
      border-radius: 50%;
      -webkit-border-radius: 50%;
      display: block;
      overflow: hidden;
      position: relative;
      max-width: 100%;
    }

    .comment-user,
    .reply {
      display: inline-block;
      font-size: 13px;
      font-weight: 700;
      margin-right: 20px;
    }

    .comment-user a,
    .reply a {
      color: #555;
      transition: all 0.17s cubic-bezier(0, 0, 0.58, 1) 0s;
      -webkit-transition: all 0.17s cubic-bezier(0, 0, 0.58, 1) 0s;
      -moz-transition: all 0.17s cubic-bezier(0, 0, 0.58, 1) 0s;
      -o-transition: all 0.17s cubic-bezier(0, 0, 0.58, 1) 0s;
    }

    .comment-user a:hover,
    .reply a:hover {
      color: #212121;
    }

    .comment-date {
      display: inline-block;
      font-size: 13px;
      font-weight: 700;
      margin-right: 20px;
      color: #888;
    }

    .reply .sep {
      margin: 0 5px 0 6px;
    }

    .comment-body p {
      margin: 0.85em 0 0.85em 51px;
    }

    .comments-list .children {
      border-left: 1px solid #E1E1E1;
      list-style: none outside none;
      margin-left: 0 !important;
      padding-left: 40px;
      list-style-type: none;
    }

    .comments-list ol ol,
    .comments-list ul ul {
      margin-left: 18px;
    }

    .comments-list .children>li {
      position: relative;
    }

    .comments-list .children>li:before {
      -moz-border-bottom-colors: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      background-color: #FFFFFF;
      border-color: -moz-use-text-color -moz-use-text-color #E1E1E1 #E1E1E1;
      border-image: none;
      border-style: none none solid solid;
      border-width: 0 0 1px 1px;
      content: "";
      display: block;
      height: 9px;
      left: -5px;
      position: absolute;
      top: 55px;
      transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      width: 15px;
      z-index: 8;
      background-color: #f1f1f1;
    }

    .comments-list li.comment>div.comment-body {
      background-color: #f8f8f8;
      border: 1px solid #E1E1E1;
      margin: 0;
      overflow: hidden;
      padding: 25px 25px 20px 60px;
      position: relative;
    }

    .add-comment {
      margin-top: 40px;
    }

    .sortable li {
      list-style: none;
    }

    .bg-yellow {
      background-color: #ffdc00;
    }

    .navy {
      color: #001f3f;
    }

    .bg-maroon {
      background-color: #85144b;
    }

    .yellow {
      color: #ffdc00;
    }

    .p1 {
      padding: .5rem;
    }

    .mb1 {
      margin-bottom: .5rem;
    }

    .msdt-result-table td,
    .msdt-result-table th {
      padding: 5px 20px 5px 20px;
    }

    .border-box {
      border: 1px solid;
    }

    .border-bottom {
      border-bottom: 1px solid;
    }

    .short-cell {
      height: 5px;
    }

    table.lembar-jawab-pilihan-ganda thead th {
      text-align: center;
      padding: 15;
      font-weight: bold;
      border: 2px solid;
    }

    table.lembar-jawab-pilihan-ganda tbody,
    table.ljk-ab tbody {
      border: 2px solid;
    }

    table.lembar-jawab-pilihan-ganda tbody td {
      text-align: center;
      padding: 10px 0 10px 0;
    }

    table.lembar-jawab-pilihan-ganda tbody td:first-child {
      padding-left: 10px;
    }

    table.lembar-jawab-pilihan-ganda tbody td div {
      height: 20px;
      width: 20px;
    }

    table.lembar-jawab-pilihan-ganda tbody td div.selected {
      border: 1px solid;
      border-radius: 50%;
      background: darkgrey;
    }

    table.ljk-ab {
      margin-bottom: 20px;
    }

    table.ljk-ab tbody td {
      padding: 5px;
    }

    table.ljk-ab tbody td:nth-child(2) {
      width: 400px;
    }

    table.ljk-ab tbody td.jawaban {
      border: 2px solid;
      padding: 10px;
      text-align: center;
      width: 80px;
    }

    .print-only {
      display: none;
    }

    .radio input[type=radio] {
      margin-left: -10px;
    }
  </style>

  <style media="print">
    @page {
      size: auto;
      /* auto is the initial value */

      /* this affects the margin in the printer settings */
      margin: 15mm 15mm 15mm 15mm;
    }

    .no-print {
      display: none
    }

    .print-only {
      display: block;
    }

    #main-wrapper {
      margin: 0;
      margin-top: -2cm;
    }

    .page-sidebar-fixed.page-header-fixed .page-inner {
      padding: 0;
      margin: 0;
    }

    .panel .panel-body {
      padding: 0;
    }

    .ljk-header td {
      padding: 5px;
    }

    .panel-lj {
      page-break-before: always;
    }

    .panel-lh {
      page-break-before: always;
    }
  </style>
  <script>
    window.base_url = '<?=base_url()?>';
  </script>
</head>

<body class="page-header-fixed compact-menu pace-done page-sidebar-fixed">
    <div class="overlay"></div>
        <!-- Page Content -->
        <main class="page-content content-wrap">
            <!-- Navbar -->
            <div class="navbar no-print">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
        
                    <!-- Logo Box -->
                    <div class="logo-box">
                        <a href="<?=site_url()?>admin" class="logo-text">
                            <span>RS</span>
                        </a>
                    </div>
        
                    <!-- Top Menu -->
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="<?=site_url('logout')?>" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Page Sidebar -->
            <div class="page-sidebar sidebar no-print">
                <div class="page-sidebar-inner slimscroll">
                <?php $user = $this->ion_auth->user()->row();
                
                if($this->ion_auth->is_admin()): ?>
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                                <div class="sidebar-profile-details">
                                  <span style='color:#22BAA0'><?=$user->nama?></span>
                                    <span>Admin</span>
                                </div>
                        </div>
                    </div>
                
                <?php elseif($this->ion_auth->in_group('pegawai')):?>
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <div class="sidebar-profile-details">
                                <span style="color: white;"><?=$user->nama?></span>
                                <span style='color:#22BAA0'>Pegawai</span>
                            </div>
                        </div>
                    </div>
                
                <?php elseif($this->ion_auth->in_group('kepala')):?>
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <div class="sidebar-profile-details">
                                <span style='color: white'><?=$user->nama?></span>
                                <span style='color:#22BAA0'>Atasan</span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!--Menu Sidebar-->
                <ul class="menu accordion-menu">

                <!-- Dashboard Admin -->
                <?php if($this->ion_auth->is_admin()): ?>
                
                    <!--Dashboard-->
                    <li class="">
                        <a href="<?=site_url()?>admin" class="waves-effect waves-button">
                            <span class="menu-icon icon-home"></span>
                            <p>Dashboard</p>
                        </a>
                    </li>
            
                    <!--Menu Pegawai-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Pegawai</p>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/karyawan/asn')?>">ASN</a></li>
                            <li><a href="<?=site_url('admin/karyawan/non_asn')?>">Non-ASN</a></li>
                            <!--<li><a href="<?=site_url('admin/bagian')?>">Bagian</a></li>-->
                            <li><a href="<?=site_url('admin/rekapitulasi')?>">Rekapitulasi Data Pegawai</a></li>
                        </ul>
                    </li>
            
                    <!--Menu Administrasi-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Administrasi</p>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/peraturan')?>">Posting Peraturan Kepegawaian</a></li>
                            <!--<li><a href="<?=site_url('admin/jadwal')?>">Jadwal/Shift</a></li> -->
                            <!--<li><a href="<?=site_url('admin/presensi')?>">Presensi</a></li>-->
                            <!--<li><a href="<?=site_url('admin/cuti')?>">Data Cuti</a></li>-->
                            <!--<li><a href="<?=site_url('admin/approval_cuti_admin')?>">Verifikasi Cuti</a></li>-->
                            <!--<li><a href="<?=site_url('admin/cuti/kelompok')?>">Atur Kelompok Cuti</a></li>-->
                            <!--<li><a href="<?=site_url('admin/mutasi')?>">Mutasi</a></li>-->
                        </ul>
                    </li>
            
                    <!--Menu Kontrak Pegawai-->
                    
                    <!--<li class="droplink">-->
                    <!--    <a href="#" class="waves-effect waves-button">-->
                    <!--        <span class="menu-icon icon-pin"></span>-->
                    <!--        <p>Kontrak Pegawai</p>-->
                    <!--        <span class="arrow"></span>-->
                    <!--    </a>-->
                    <!--    <ul class="sub-menu">-->
                    <!--        <li><a href="<?=site_url('admin/kontrak')?>">Kontrak Kerja</a></li>-->
                    <!--        <li><a href="<?=site_url('admin/kontrak_approval')?>">Approval Kontrak Kerja</a></li>-->
                    <!--    </ul>-->
                    <!--</li> -->
            
                    <!--Menu Rekruitmen-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Rekrutmen</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/rekrutmen')?>">Lowongan Rekrutmen</a></li>
                            <li><a href="<?=site_url('admin/pelamar')?>">Data Calon Pelamar</a></li>
                            <li><a href="<?=site_url('admin/awal')?>">Screening Awal</a></li>
                            <li><a href="<?=site_url('admin/lanjut')?>">Tahap Lanjut</a></li>
                            <li><a href="<?=site_url('admin/lolos')?>">Lolos</a></li>
                            <li><a href="<?=site_url('admin/pengumuman_rekrut')?>">Pengumuman Lolos</a></li>
                        </ul>
                    </li>
            
                    <!--Menu Event/Kegiatan-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Event/Kegiatan</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/event')?>">Posting Kegiatan Umum</a></li>
                        </ul>
                    </li>
                    
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Pelatihan</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/approval_pelatihan')?>">Approval Pelatihan</a></li>
                            <li><a href="<?=site_url('admin/approval_pelatihan/pelatihan')?>">Rekap Pelatihan</a></li>
                            <li><a href="<?=site_url('admin/approval_pelatihan/laporan')?>">Laporan Pelatihan</a></li>
                        </ul>
                    </li>
                    
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>KGB</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/gaji_pokok')?>">Data Gaji Pokok</a></li>
                            <li><a href="<?=site_url('admin/daftar_nominatif')?>">Daftar Nominatif</a></li>
                            <li><a href="<?=site_url('admin/approval_pelatihan/pelatihan')?>">Nominatif Manual</a></li>
                            <li><a href="<?=site_url('admin/approval_pelatihan/laporan')?>">Nominatif Tertunda</a></li>
                            <li><a href="<?=site_url('admin/approval_pelatihan/laporan')?>">Riwayat KGB </a></li>
                        </ul>
                    </li>
            
                    <!--Menu KPI-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>KPI</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/kpi')?>">List</a></li>
                            <li><a href="<?=site_url('admin/kpi/karyawan')?>">Karyawan</a></li>
                        </ul>
                    </li>

                    <!--Menu Transaksi Anjab-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Anjab</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('anjab/transaksi')?>">Anjab</a></li>
                            <li><a href="<?=site_url('anjab/transaksi/reqacc')?>">Req Acc</a></li>
                        </ul>
                    </li>
            
                <?php else :?>

                    <!-- Dashboard Pegawai -->
                    <li class="">
                        <a href="<?=site_url()?>admin" class="waves-effect waves-button">
                            <span class="menu-icon icon-home"></span>
                            <p>Dashboard</p>
                        </a>
                    </li>
            
                    <!--Menu Informasi Profile-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button"> 
                            <span class="menu-icon icon-pin"></span>
                        <p>Informasi</p>
                        <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/profile')?>">Profil</a></li>
                        </ul>
                    </li>
            
                    <!--Menu Tambahan Untuk Akun Pegawai Non ASN-->
                    <?php if($user->asn =='non' || $this->ion_auth->in_group('kepala')):  ?>
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button"> 
                            <span class="menu-icon icon-pin"></span>
                            <p>Kontrak Pegawai</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('admin/kontrak_pengajuan')?>">Approval Kontrak Kerja</a></li>
                            <li><a href="<?=site_url('admin/kpi/kpi_karyawan')?>">KPI</a></li>
                        </ul>
                    </li>
                     <?php endif; ?>
            
                    <!--Menu Administrasi-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Administrasi</p><span class="arrow"></span>
                         </a>
                        <ul class="sub-menu">
                        <?php if($this->ion_auth->in_group('pegawai')): ?>
                            <li>
                                <a href="<?=site_url('admin/pengajuan_cuti')?>">Pengajuan Cuti/Izin</a>
                            </li>
                            <li>
                                <a href="<?=site_url('admin/approval_sub')?>">Approval Pengganti</a>
                            </li>
                            <li>
                                <a href="<?=site_url('admin/pengajuan_cuti')?>">Pengajuan Administrasi Kepegawaian</a>
                            </li>
                            <li>
                                <a href="<?=site_url('admin/pengajuan_cuti')?>">Penjagaan</a>
                            </li>
                        <?php endif; ?>
        
                        <?php 
                        // $group = array('kepruang', 'kasubag','kabag','wadirum');
                        if($this->ion_auth->in_group('kepala')): ?>
                            <li>
                                <a href="<?=site_url('admin/approval_cuti')?>">
                                    Approval Atasan-Cuti
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?=site_url('admin/kpi/atasan')?>">
                                    KPI - Atasan
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?=site_url('admin/kpi/atasan')?>">
                                    Penilaian
                                </a>
                            </li>
                            
                             <li>
                                <a href="<?=site_url('admin/kpi/atasan')?>">
                                    Usulan Administrasi
                                </a>
                            </li>
                            
                            
                        <?php endif; ?>
                        </ul>
                    </li>
            
                    <!--Menu Pelatihan-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Pelatihan</p>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <li><a href="<?=site_url('admin/event_pelatihan')?>">Usulan Pelatihan Pegawai</a></li>
                                <li><a href="<?=site_url('admin/approval_pelatihan/pelatihan/')?>">Rekap Pelatihan</a></li>
                                <li><a href="<?=site_url('admin/approval_pelatihan')?>">Laporan Pelatihan</a></li>
                            </li>
                        </ul>
                    </li>
            
                    <!--Menu Anjab-->
                    <li class="droplink">
                        <a href="#" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Anjab</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?=site_url('anjab/transaksi')?>">Anjab</a></li>
                        </ul>
                    </li>
            
                <?php endif; ?>
          
                    <li>
                    <hr>
                    </li>
            
                    <!--Ganti Password Admin-->
                    <?php if($this->ion_auth->is_admin()): ?>
                    <li class="">
                        <a href="<?=site_url()?>admin/password_admin" class="waves-effect waves-button">
                            <span class="menu-icon icon-pin"></span>
                            <p>Ganti Password Admin</p>
                        </a>
                    </li>
                    <?php endif; ?>
          
                    <!--Logout-->
                    <li>
                        <a href="<?php echo site_url('logout');?>" class="waves-effect waves-button">
                            <span class="menu-icon icon-logout"></span>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div>
    
            <!-- Page Inner -->
            <div class="page-inner">
                <div class="page-title no-print">
               
	                	  <h3>Sistem Informasi Kepegawaian RSUD RA Kartini Kota Jepara </h3>
	                	  <p>Jl. KH. Wahid Hasyim, Rw. V, Bapangan, Kec. Jepara, Kabupaten Jepara, Jawa Tengah 59413</p>
	                
                </div>
            
                <!-- Main Wrapper -->
                <div id="main-wrapper">
                    <?=$content?>
                </div>
             
                <div class="page-footer no-print">
                    <p class="no-s"><?php echo date('Y');?> &copy; Powered by RUMAH SAKIT.</p>
                </div>
            </div>
        </main>
    <div class="cd-overlay"></div>


  <!-- Javascripts -->

  <script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/pace-master/pace.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/switchery/switchery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/uniform/jquery.uniform.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/main.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/waves/waves.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/main.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/waypoints/jquery.waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/jquery-counterup/jquery.counterup.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/toastr/toastr.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.time.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.symbol.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.resize.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.tooltip.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/modern.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/admin.js?m='.time()?>"></script>
  <script src="<?=base_url()?>assets/js/qna.js?m=<?=time()?>"></script>
  <?=$_scripts?>
  <script type="text/javascript">
    let current_url = location.href.replace(location.hash, "");
    let $menu = $(".menu li>a[href='" + current_url + "']");
    if ($menu.parent().parent().hasClass("sub-menu")) {
      $menu.parent().parent().parent().addClass("open");
      $menu.parent().addClass("active");
    } else {
      $menu.parent().addClass("active");
    }

    function cetak_lj() {
      $(".panel-lh").addClass('no-print');
      $(".panel-lj").removeClass('no-print');
      window.print();
    }

    function cetak_lh() {
      $(".panel-lj").addClass('no-print');
      $(".panel-lh").removeClass('no-print');
      window.print();
    }
  </script>

</body>

</html>