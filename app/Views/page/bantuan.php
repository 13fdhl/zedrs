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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?=base_url()?>assets/sipeka/css/sipeka.css">
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
                    <li class=""><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="<?=site_url('profil')?>"><i class="fa fa-user"></i> <span>Profil</span></a></li>
                    <li class=""><a href="<?=site_url('chatbot')?>"><i class="fa fa-commenting"></i> <span>Chat BOT Virtual</span> <span class="label label-warning">Beta</span></a></li>
                    <li class="active"><a href="<?=site_url('bantuan')?>""><i class="fa fa-question-circle"></i> <span>Bantuan</span></a></li>
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
                <h1>Bantuan</h1>
                <p>Informasi bantuan penggunaan SIAKAD UNITAMA</p>
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
                                            <h4><i class="fa fa-archive"></i> Versi 1.7</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 14 September 2022
                                                    <ul>
                                                        <li>Menambahkan fitur laporan semester dosen wali</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.6</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 02 Mei 2021
                                                    <ul>
                                                        <li>Menambahkan fitur konfirmasi berita acara perkuliahan oleh mahasiswa</li>
                                                        <li>Perbaikan fitur update status pengerjaan tugas akhir mahasiswa pada akun level Wakil Ketua 1, Ketua Program Studi, dan Kepala BAAK</li>
                                                        <li>Menambahkan status masa pengerjaan tugas akhir mahasiswa</li>
                                                        <li>Menambahkan data nomor handphone mahasiswa beserta nama dosen walinya pada halaman daftar peserta mata kuliah</li>
                                                        <li>Menambahkan data nomor handphone mahasiswa pada halaman daftar mahasiswa bimbingan tugas akhir</li>
                                                        <li>Menambahkan data nomor handphone dosen mata kuliah pada halaman jadwal mata kuliah mahasiswa</li>
                                                        <li>Menambahkan data nomor handphone dosen pembimbing dan dosen penguji tugas akhir pada halaman monitoring tugas akhir mahasiswa</li>
                                                        <li>Menambahkan fitur sinkronisasi data induk dosen dari Feeder PDDIKTI ke SIAKAD</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.5</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 11 Agustus 2020
                                                    <ul>
                                                        <li>Menghilangkan layanan pengaduan pengguna</li>
                                                        <li>Menambahkan fitur reset pengisian kuesioner penilaian kinerja dosen pada akun Mahasiswa</li>
                                                        <li>Menambahkan fitur rekapitulasi nilai seminar proposal dan skripsi mahasiswa pada akun Kepala BAAK</li>
                                                        <li>Menambahkan fitur dosen wali virtual pada akun mahasiswa (uji coba)</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.4</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 15 Februari 2020
                                                    <ul>
                                                        <li>Penambahan status verifikasi dan sinkronisasi pada data nilai mata kuliah.</li>
                                                        <li>Perubahan bentuk form entri nilai mata kuliah.</li>
                                                        <li>Penambahan fitur untuk penempatan peserta mata kuliah ke dalam kelas perkuliahan secara otomatis.</li>
                                                        <li>Penambahan fitur pemilihan kelas oleh mahasiswa pada saat mengisi form Kartu Rencana Studi.</li>
                                                        <li>Perbaikan form entri berita acara perkuliahan</li>
                                                        <li>Penambahan halaman berita acara perkuliahan pada akun mahasiswa</li>
                                                        <li>Penambahan form penilaian seminar proposal, ujian hasil, dan ujian tutup skripsi mahasiswa</li>
                                                        <li>Perbaikan halaman Kartu Hasil Studi Mahasiswa dengan menambahkan pilihan semester yang lebih banyak.</li>
                                                        <li>Perbaikan berbagai fitur sinkronisasi data antara SIAKAD dan Feeder PDDIKTI.</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.3</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 02 September 2019
                                                    <ul>
                                                        <li>Penambahan fitur untuk memperbaharui biodata untuk mahasiswa dengan sinkronisasi ke PDDIKTI.</li>
                                                        <li>Penambahan fitur untuk memperbaharui foto profil pengguna dan menghilangkan pembaharuan foto profil otomatis apabila login menggunakan akun Google. Foto profil pengguna secara otomatis akan disalin dari foto dosen, staf, mahasiswa, atau wisudawan.</li>
                                                        <li>Penambahan fitur sinkronisasi nilai mata kuliah transfer pada akun mahasiswa.</li>
                                                        <li>Penambahan validasi registrasi keuangan mahasiswa yang memiliki sangkutan keuangan pada semester sebelumnya.</li>
                                                        <li>Perbaikan fitur pengisian KRS dengan mencegah pengisian KRS apabila dosen wali mahasiswa belum ditetapkan.</li>
                                                        <li>Penambahan fitur pembaharuan data transkrip nilai sementara pada halaman detail data mahasiswa.</li>
                                                        <li>Perbaikan fitur persetujuan pengajuan judul proposal tugas akhir.</li>
                                                        <li>Penambahan fitur untuk mencetak buku induk wisudawan.</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.2</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 22 Februari 2019
                                                    <ul>
                                                        <li>Perbaikan fitur administrasi keuangan untuk akun BAUK.</li>
                                                        <li>Perbaikan kesalahan pada kewajiban pengisian kuesioner penilaian dosen.</li>
                                                        <li>Penghapusan fitur pemilihan kelas untuk akun mahasiswa.</li>
                                                        <li>Penambahan fitur penyalinan data peserta kelas mata kuliah dari kelas lainnya pada halaman administrasi kelas mata kuliah.</li>
                                                        <li>Penambahan fitur notifikasi jadwal ujian tugas akhir melalui Bot Telegram.</li>
                                                        <li>Perbaikan tampilan beberapa halaman untuk mobile device.</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.1</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 20 Agustus 2018
                                                    <ul>
                                                        <li>Perbaikan fitur sinkronisasi data SIAKAD dengan aplikasi Feeder PDDIKTI.</li>
                                                        <li>Perbaikan tampilan form entri data nilai mata kuliah.</li>
                                                        <li>Penambahan modul administrasi tugas akhir mahasiswa mencakup proses pengusulan judul, penyeleksian usulan judul, penetapan dosen pembimbing, penetapan dosen penguji, dan penjadwalan ujian.</li>
                                                        <li>Penambahan report data dosen, mahasiswa, dan administrasi untuk level pengguna eksekutif.</li>
                                                        <li>Perbaikan tampilan dan logic beberapa fitur yang ada.</li>
                                                    </ul>
                                                </p>
                                                <hr />
                                                <h4><i class="fa fa-archive"></i> Versi 1.0</h4>
                                                <p><i class="fa fa-calendar"></i> Tanggal Rilis : 22 Mei 2018
                                                    <ul>
                                                        <li>Penggunaan <i>user interface</i> yang baru.</li>
                                                        <li>Penambahan beberapa menu yang berkaitan dengan administrasi akademik dan keuangan.</li>
                                                        <li>Integrasi login dengan menggunakan akun Google.</li>
                                                        <li>Pemanfaatan bot telegram untuk mengakses informasi dari SIAKAD serta menjalankan beberapa perintah khusus sesuai hak akses pengguna (dalam tahap pengembangan).</li>
                                                        <li>Penggunaan halaman pengaduan untuk menyampaikan permasalahan terkait aplikasi dan data SIAKAD kepada Administrator.</li>
                                                    </ul>
                                                </p>
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
                                                <p>Pengguna dapat login ke dalam SIAKAD STMIK AKBA menggunakan akun Google yang terdaftar. Informasi foto pengguna yang terdapat pada akun Google akan disalin dan akan digunakan sebagai foto profil pengguna SIAKAD.</p>
                                                <p>Cara Penggunaan
                                                    <ol>
                                                        <li>Buka halaman login SIAKAD STMIK AKBA.</li>
                                                        <li>Klik tombol "Login dengan Akun Google" dan tunggu hingga tampil halaman login Google.</li>
                                                        <li>Login dengan menggunakan akun Google yang akan digunakan dan tunggu hingga proses verifikasi dilakukan.</li>
                                                        <li>Apabila login berhasil, maka halaman akan dialihkan ke Dashboard SIAKAD STMIK AKBA.</li>
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
                                                <p><img src="siakad/img/bot-telegram-siakad-stmik-akba-128-128.jpg" alt="Bot Telegram SIAKAD STMIK AKBA" class="img-circle" /></p>
                                                <p><a href="https://t.me/SASiakadBot" target="_blank">Bot Telegram STMIK AKBA</a> memberikan perluasan akses pengguna terhadap SIAKAD STMIK AKBA. Bot ini memiliki dua kemampuan, yaitu:<ol><li>Mengirimkan notifikasi beberapa jenis aktivitas pengguna.</li><li>Menjalankan beberapa perintah khusus (sesuai hak akses pengguna) dan menampilkan respon dari server.</li></ol></p>
                                                <p>Cara Aktivasi Bot Telegram<ol><li>Pastikan Anda sudah menginstall aplikasi Telegram pada <i>smartphone</i> Anda.</li><li>Jalankan aplikasi Telegram Anda.</li><li>Cari akun bot telegram SIAKAD STMIK AKBA Anda dengan menggunakan kata kunci <a href="https://t.me/SASiakadBot" target="_blank">@SASiakadBot</a>.</li><li>Pada jendela chat bot telegram, klik tombol "Start" untuk mulai menggunakan bot telegram.</li><li>Ketikkan perintah /idsaya untuk menampilkan ID telegram Anda.</li><li>Masuk ke aplikasi SIAKAD STMIK AKBA</li><li>Klik menu <a href="?act=profilPengguna">"Profil"</a> yang ada pada menu sisi kiri.</li><li>Masukkan ID telegram Anda pada form aktivasi bot telegram.</li><li>Klik tombol "Aktifkan" untuk mengaktifkan fitur bot telegram.</li></ol></p>
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
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Mahasiswa</span>
                                                    <a href="files/Manual Book SIAKAD untuk Mahasiswa.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Dosen Wali</span>
                                                    <a href="files/Manual Book SIAKAD untuk Dosen Wali.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Dosen Mata Kuliah</span>
                                                    <a href="files/Manual Book SIAKAD untuk Dosen Mata Kuliah.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Kepala BAAK</span>
                                                    <a href="files/Manual Book SIAKAD untuk Kepala BAAK.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Staf BAAK</span>
                                                    <a href="files/Manual Book SIAKAD untuk Staf BAAK.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Kepala BAUK</span>
                                                    <a href="files/Manual Book SIAKAD untuk Kepala BAUK.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Kepala Wakil Ketua 1</span>
                                                    <a href="files/Manual Book SIAKAD untuk Wakil Ketua 1.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Kepala Wakil Ketua 2</span>
                                                    <a href="files/Manual Book SIAKAD untuk Wakil Ketua 2.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Ketua Program Studi</span>
                                                    <a href="files/Manual Book SIAKAD untuk Ketua Program Studi.pdf" target="_blank" class="pull-right">Download</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <span><i class="fa fa-file"></i> Manual Book SIAKAD untuk Ketua LPM</span>
                                                    <a href="files/Manual Book SIAKAD untuk Ketua LPM.pdf" target="_blank" class="pull-right">Download</a>
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
            &copy; UPT ICT UNITAMA : 2017 - 2023    <div class="pull-right hidden-xs">Versi 1.7</div>
        </footer>
    </div>
	<script type="text/javascript" src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>