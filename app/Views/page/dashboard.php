<!DOCTYPE html>
<html>

<head>
    <!-- Metadata dokumen -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistem Informasi Kepegawaian RSUD RA. Kartini Kota Jepara">
    <meta name="keywords" content="rsud, kartini, sipeka">
    <meta name="author" content="Zed">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SIPEKA : Dashboard</title>
    <!-- Pemanggilan file style -->
    <link rel="shortcut icon" href="<?=base_url()?>sipeka/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-red.min.css">
    <link rel="stylesheet" href="<?=base_url()?>https://fonts.googleapis.com/cssfamily=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?=base_url()?>assets/sipeka/css/sipeka.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    
    <!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

        <header class="main-header" >
            <a href="index.php" class="logo">
                <span class="logo-mini">SK</span>
                <span class="logo-lg">RSUD RA. KARTINI</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?=base_url()?>assets/sipeka/img/user.jpg" class="user-image img-foto-profil-pengguna" />
                                <span class="hidden-xs">ADMIN ZED</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?=base_url()?>assets/sipeka/img/user.jpg" class="img-circle img-foto-profil-pengguna" />
                                    <p>
                                        Muhammad Fadhil Mahdy <small>
                                            Admin ZED </small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?=site_url('profil')?>" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?=site_url('login')?>" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header text-center" style="color: #FFF;"><i class="fa fa-star"></i> ADMIN ZED </span> <i class="fa fa-star"></i></li>
                    <li class="active"><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="<?=site_url('profil')?>"><i class="fa fa-user"></i> <span>Profil</span></a></li>
                    <li class=""><a href="<?=site_url('chatbot')?>"><i class="fa fa-commenting"></i> <span>Chat BOT Virtual</span> <span class="label label-warning">Beta</span></a></li>
                    <li class=""><a href="<?=site_url('bantuan')?>""><i class="fa fa-question-circle"></i> <span>Bantuan</span></a></li>
                    <li><a href="<?=site_url('login')?>"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
                    <li class="header text-center sidebar-nama-level-pengguna" style="color: #FFF;"><i class="fa fa-star"></i> M E N U <i class="fa fa-star"></i></li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-pencil-square-o"></i>
                            <span>Pegawai</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="?act=asn">ASN</a></li>
                            <li class=""><a href="?act=non-asn">Non-ASN</a></li>
                            <li class=""><a href="?act=rekapdata">Rekapitulasi Data</a></li>
                        </ul>
                    </li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-code"></i>
                            <span>Recruitment</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="?act=lowongan">Lowongan Pendaftaran</a></li>
                            <li class=""><a href="?act=datapelamar">Data Pelamar</a></li>
                            <li class=""><a href="?act=screeningawal">Screening Awal</a></li>
                            <li class=""><a href="?act=tahaplanjut">Tahap Lanjut</a></li>
                            <li class=""><a href="?act=lolos">Lolos</a></li>
                            <li class=""><a href="?act=pengumumanlolos">Pengumuman Lolos</a></li>
                        </ul>
                    </li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-file-text"></i>
                            <span>Pelatihan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="?act=approvalpelatihan">Approval Pelatihan</a></li>
                            <li class=""><a href="?act=rekappelatihan">Rekap Pelatihan</a></li>
                            <li class=""><a href="?act=laporanpelatihan">Laporan Pelatihan</a></li>
                        </ul>
                    </li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-diamond"></i>
                            <span>KGB</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="?act=datagajipokok">Data Gaji Pokok</a></li>
                            <li class=""><a href="?act=daftarnominatif">Daftar Nominatif</a></li>
                            <li class=""><a href="?act=nominatifmanual">Nominatif Manual</a></li>
                            <li class=""><a href="?act=nominatiftertunda">Nominatif Tertunda</a></li>
                            <li class=""><a href="?act=riwayatKGB">Riwayat KGB</a></li>
                        </ul>
                    </li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-graduation-cap"></i>
                            <span>KPI</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="?act=listKPI">List</a></li>
                            <li class=""><a href="?act=karyawan">Karyawan</a></li>
                        </ul>
                    </li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-question-circle"></i>
                            <span>ANJAB</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="?act=anjab">ANJAB</a></li>
                            <li class=""><a href="?act=reqacc">Req Acc</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Sistem Informasi Kepegawaian RSUD RA. Kartini Kota Jepara</h1>
                <p>Jl. KH. Wahid Hasyim, Rw. V, Bapangan, Kec. Jepara, Kabupaten Jepara, Jawa Tengah 59413</p>
            </section>
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <!-- <div class="box box-danger">
                            <div class="box-body text-center">
                                <div class='callout callout-danger'>
                                    <h4>Semester Aktif
                                        <hr />2023/2024 Ganjil
                                    </h4>
                                </div>
                            </div>
                        </div> -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Perkembangan Rumah Sakit</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-box bg-blue">
                                            <span class="info-box-icon"><i class="fa fa-tachometer"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Total Pegawai</span>
                                                <span class="info-box-number">404</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 73.611111111111%"></div>
                                                </div>
                                                <span class="progress-description">
                                                    ASN : 144 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box bg-green">
                                            <span class="info-box-icon"><i class="fa fa-line-chart"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Indeks Pelayanan</span>
                                                <span class="info-box-number">4.8</span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 89.920634920635%"></div>
                                                </div>
                                                <span class="progress-description">
                                                    Range : 0 - 5
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Peraturan <span class="badge">2</span></h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="timeline">
                                    <li><i class='fa fa-bullhorn bg-blue'></i>
                                        <div class='timeline-item'><span class='time'><i class='fa fa-calendar'></i> Publikasi: 06-10-2023</span>
                                            <h3 class='timeline-header'><strong>Peraturan Umum Rumah Sakit</strong></h3>
                                            <div class='timeline-body'>
                                                <p> RSUD RA. Kartini yang menyelenggarakan pelayanan kesehatan kepada masyarakat, mempekerjakan pegawai-pegawai
                                                    untuk mencapai visi dan misi yang sudah ditetapkan. Agar operasional rumah sakit dapat berjalan baik dan lancar,
                                                    telah ditetapkan Peraturan Rumah Sakit yang merupakan pedoman seluruh peraturan yang berlaku di rumah sakit.
                                                </p>
                                                <div style="font-size:medium; text-align:right;">
                                                    <a download href="#" class="btn btn-primary" style="position: relative;">Download</a>
                                                </div>

                                                <p>&nbsp;</p>


                                            </div>
                                    </li>
                                    <li><i class='fa fa-bullhorn bg-blue'></i>
                                        <div class='timeline-item'><span class='time'><i class='fa fa-calendar'></i> Publikasi: 10-10-2023</span>
                                            <h3 class='timeline-header'><strong>Peraturan Kepegawaian </strong></h3>
                                            <div class='timeline-body'>
                                                <p>Dummy Peraturan Kepegawaian</p>
                                                <div style="font-size:medium; text-align:right;">
                                                    <a download href="#" class="btn btn-primary" style="position: relative;">Download</a>
                                                </div>
                                                <p>&nbsp;</p>
                                            </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-up bg-green"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Pengumuman <span class="badge">1</span></h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="timeline">
                                    <li><i class='fa fa-bullhorn bg-blue'></i>
                                        <div class='timeline-item'><span class='time'><i class='fa fa-calendar'></i> Publikasi: 06-10-2023</span>
                                            <h3 class='timeline-header'><strong>Program Pelatihan Khusus</strong></h3>
                                            <div class='timeline-body'>
                                                <p>“ASESOR BAGI TENAGA KESEHATAN, DOKTER, PERAWAT, DAN PROFESI KESEHATAN LAINNYA”</p>

                                                <p>Dalam rangka akuntabilitas kepada masyarakat pengguna fasilitas pelayanan kesehatan , telah ditetapkan berbagai kebijakan antara lain, setiap perawat harus melaksanakan praktik keperawatan sesuai standar, kode etik dan standar prosedur operasional, memiliki tugas dan wewenang serta selalu mengikuti perkembangan IPTEK ( UU No. 38 Tahun 2014 tentang Keperawatan ).</p>

                                                <p>Dalam PERMEN PAN No. 25 Tahun 2014, untuk kenaikan jenjang fungsional,setiap perawat harus di validasi kompetensinya oleh asesor yang tersertifikasi. Standar akreditasi RS tahun 2012 juga mengharuskan perawat memiliki kompetensi dan suratpenugasan klinik. PERMENKES Nomor 49 Tahun 2013 tentang Komite Keperawatan, dimana untuk pemberian kewenangan klinik, perawat harus memenuhi kompetensi.</p>

                                                <p><strong>Tujuan</strong></p>

                                                <ul>
                                                    <li>Peserta Dapat Merancang Asesmen Kompetensi</li>
                                                    <li>Peserta Dapat Mengembangkan Instrument Asesmen Kompetensi</li>
                                                    <li>Peserta Dapat Melaksanakan Asesmen Kompetensi</li>
                                                    <li>Peserta Dapat Mereview Asesmen Kompetensi</li>
                                                </ul>

                                                <p>&nbsp;</p>

                                                <p><strong>Materi</strong></p>

                                                <ul>
                                                    <li>Kebijakan Jenjang Karir Perawat & Sistem Kredensial Bagi Dokter, Perawat, Bidan, Tenaga Kesehatan, Dan Profesi Kesehatan Lainnya</li>
                                                    <li>Konsep Dasar Asesmen Kompetensi</li>
                                                    <li>Identifikasi Unit Kompetensi (single) atau (Cluster)</li>
                                                    <li>Identifikasi Komponen Kompetensi Sebagai Dasar Asesmen</li>
                                                    <li>Perencanaan Asesmen Kompetensi Bagi Dokter, Perawat, Bidan, Tenaga Kesehatan, Dan Profesi Kesehatan Lainnya</li>
                                                    <li>Mengembangkan Perangkat Asesmen Kompetensi Bagi Dokter, Perawat, Bidan, Tenaga Kesehatan, Dan Profesi Kesehatan Lainnya</li>
                                                    <li>Menyusun Perangkat Asesmen Kompetensi</li>
                                                    <li>Mereview Asesmen Kompetensi</li>
                                                </ul>
                                            </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-up bg-green"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Kalender </h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class='list-group'>
                                    <li class='list-group-item'><b>Recruitment Tenaga Kerja</b><br /><span class='label label-danger'>Sementara Berlangsung</span><br />26-09-2023 s/d 17-10-2023</li>
                                    <li class='list-group-item'><b>Program Pelatihan Khusus</b><br /><span class='label label-danger'>Sementara Berlangsung</span><br />09-10-2023 s/d 12-10-2023</li>
                                    <li class='list-group-item'><b>Cuti Bersama</b><br />24-12-2023 s/d 25-12-2023</li>
                                    <li class='list-group-item'><b>Tahun Baru 2024</b><br />31-12-2023 s/d 01-01-2024</li>
                                </ul>
                            </div>
                        </div>
                        <div class="box box-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">Event Terbaru</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class='list-group'>
                                    <li class='list-group-item'><b>OPEN RECRUITMENT</b><br />06-10-2023<br /></li>
                                </ul>
                                <ul class='list-group'>
                                    <li class='list-group-item'><b>PROGRAM PELATIHAN KHUSUS</b><br />09-10-2023<br /></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Libur Nasional</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class='callout callout-success'>
                                    <p>Belum ada data libur nasional.</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Pengguna Online <span class="badge">10</span></h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body text-center">
                                &nbsp;<img src='siakad/img/user/user.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/user.jpg" width="100" height="100" /><br /><span class="label label-success">Muhammad Fadhil Mahdy</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/3027_1695435068.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/3027_1695435068.jpg" width="100" height="100" /><br /><span class="label label-success">Muhammad Arsyad Bin Agus</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/2307_1692875999.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/2307_1692875999.jpg" width="100" height="100" /><br /><span class="label label-success">Deswin Dara</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/454_1568715737.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/454_1568715737.jpg" width="100" height="100" /><br /><span class="label label-success">Mashud, S.Kom., S.E., M.Ak.</span><br /><span class="label label-danger">Dosen</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/444_1595171635.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/444_1595171635.jpg" width="100" height="100" /><br /><span class="label label-success">Markani, S.Kom., M.Pd.</span><br /><span class="label label-danger">Dosen</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/user.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/user.jpg" width="100" height="100" /><br /><span class="label label-success">Nurfadillah</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/1692_1568815157.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/1692_1568815157.jpg" width="100" height="100" /><br /><span class="label label-success">Asran</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;<br /><br />&nbsp;<img src='siakad/img/user/user.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/user.jpg" width="100" height="100" /><br /><span class="label label-success">Nurfiyah</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/1469_1645204833.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/1469_1645204833.jpg" width="100" height="100" /><br /><span class="label label-success">Zulmy Azhary AS</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp;&nbsp;<img src='siakad/img/user/1597_1658630898.jpg' class='img-circle img-foto-profil-pengguna' width='35' height='35' data-toggle='popover' data-html='true' data-content='<div class="text-center"><img src="siakad/img/user/1597_1658630898.jpg" width="100" height="100" /><br /><span class="label label-success">Serlina Sulo</span><br /><span class="label label-danger">Mahasiswa</span></div>' data-trigger='hover' data-placement='top' />&nbsp; </div>
                            <div class="box-footer text-center">
                                Sorot foto pengguna untuk menampilkan nama dan jenis profil.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            &copy; ZED : 2023    <div class="pull-right hidden-xs">Versi 1.0</div>
        </footer>
    </div>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/chartjs/Chart.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/sipeka/js/dashboard.js"></script>
</body>

</html>