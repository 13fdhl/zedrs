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
		<title>SIAKAD UNITAMA : Bantuan</title>
    <!-- Pemanggilan file style -->
    <link rel="shortcut icon" href="<?=base_url()?>sipeka/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-red.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?=base_url()?>assets/sipeka/css/sipeka.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <li class=""><a href="<?=site_url('dashboard')?>"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="<?=site_url('profil')?>"><i class="fa fa-user"></i> <span>Profil</span></a></li>
                    <li class=""><a href="<?=site_url('chatbot')?>"><i class="fa fa-reddit"></i> <span>Chat BOT Virtual</span> <span class="label label-warning">Beta</span></a></li>
                    <li class="active"><a href="<?=site_url('bantuan')?>""><i class="fa fa-question-circle"></i> <span>Bantuan</span></a></li>
                    <li><a href="<?=site_url('login')?>"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
                    <li class="header text-center sidebar-nama-level-pengguna" style="color: #FFF;"><i class="fa fa-star"></i> M E N U <i class="fa fa-star"></i></li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-users"></i>
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
                            <i class="fa fa-pencil-square-o"></i>
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
                            <i class="fa fa-stethoscope"></i>
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
                            <i class="fa fa-dollar"></i>
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
                            <i class="fa fa-sitemap"></i>
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
                            <i class="fa fa-briefcase"></i>
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
                <h1>Bantuan</h1>
                <p>Informasi bantuan penggunaan SIPEKA RSUD RA. KARTINI</p>
            </section>
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-solid">
                            <div class="box-body">
                                <div class="box-group" id="accordionBantuan">
                                    <div class="panel box box-danger">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordionBantuan" href="#collapseCatatanRilisAplikasi" aria-expanded="false" class="collapsed">
                                                    Catatan Rilis Aplikasi
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseCatatanRilisAplikasi" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="box-body">
                                            <h4><i class="fa fa-archive"></i> Versi 1.0</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 02 Oktober 2023
                                                    <ul>
                                                        <li>zed and only zed</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel box box-warning">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordionBantuan" href="#collapseIntegrasiLoginAkunGoogle" aria-expanded="false" class="collapsed">
                                                    Integrasi Login Akun Google
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseIntegrasiLoginAkunGoogle" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="box-body">
                                                <p>Pengguna dapat login ke dalam SIPEKA RSUD RA. KARTINI menggunakan akun Google yang terdaftar. Informasi foto pengguna yang terdapat pada akun Google akan disalin dan akan digunakan sebagai foto profil pengguna SIPEKA.</p>
                                                <p>Cara Penggunaan
                                                    <ol>
                                                        <li>Buka halaman login SIPEKA RA. KARTINI.</li>
                                                        <li>Klik tombol "Login dengan Akun Google" dan tunggu hingga tampil halaman login Google.</li>
                                                        <li>Login dengan menggunakan akun Google yang akan digunakan dan tunggu hingga proses verifikasi dilakukan.</li>
                                                        <li>Apabila login berhasil, maka halaman akan dialihkan ke Dashboard SIPEKA RA. KARTINI.</li>
                                                    </ol>
                                                </p>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="panel box box-success">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordionBantuan" href="#collapseBotTelegram" aria-expanded="false" class="collapsed">
                                                    Bot Telegram
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseBotTelegram" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="box-body">
                                                <p><img src="siakad/img/bot-telegram-siakad-stmik-akba-128-128.jpg" alt="Bot Telegram SIPEKA RSUD RA.KARTINI" class="img-circle" /></p>
                                                <p>
                                                    <!-- <a href="https://t.me/SASiakadBot" target="_blank">Bot Telegram STMIK AKBA</a>  -->
                                                    <a href="#" target="_blank">Bot Telegram SIPEKA RSUD RA. KARTINI</a> 
                                                    memberikan perluasan akses pengguna terhadap SIPEKA RSUD RA. KARTINI. Bot ini memiliki dua kemampuan, yaitu:<ol>
                                                    <li>Mengirimkan notifikasi beberapa jenis aktivitas pengguna.</li>
                                                    <li>Menjalankan beberapa perintah khusus (sesuai hak akses pengguna) dan menampilkan respon dari server.</li></ol>
                                                </p>
                                                <p>Cara Aktivasi Bot Telegram<ol>
                                                    <li>Pastikan Anda sudah menginstall aplikasi Telegram pada <i>smartphone</i> Anda.</li>
                                                    <li>Jalankan aplikasi Telegram Anda.</li>
                                                    <li>Cari akun bot telegram SIPEKA RSUD RA. KARTINI Anda dengan menggunakan kata kunci <a href="#" target="_blank">@SASipekaBot</a>.</li>
                                                    <li>Pada jendela chat bot telegram, klik tombol "Start" untuk mulai menggunakan bot telegram.</li>
                                                    <li>Ketikkan perintah /idsaya untuk menampilkan ID telegram Anda.</li><li>Masuk ke aplikasi SIPEKA RSUD RA. KARTINI</li>
                                                    <li>Klik menu <a href="?act=profilPengguna">"Profil"</a> yang ada pada menu sisi kiri.</li>
                                                    <li>Masukkan ID telegram Anda pada form aktivasi bot telegram.</li>
                                                    <li>Klik tombol "Aktifkan" untuk mengaktifkan fitur bot telegram.</li></ol>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel box box-info">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordionBantuan" href="#collapseManualBook" aria-expanded="false" class="collapsed">
                                                    Manual Book
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseManualBook" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="box-body">
                                            <ul class="list-group list-group-unbordered">
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIPEKA untuk Pegawai</span>
                                                    <a href="files/Manual Book SIPEKA untuk Pegawai.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIPEKA untuk Admin RS</span>
                                                    <a href="files/Manual Book SIPEKA untuk Admin RS.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIPEKA untuk Superadmin</span>
                                                    <a href="files/Manual Book SIPEKA untuk Superadmin.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script type="text/javascript" src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>