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
        <title>SIPEKA : Chat Bot Virtual</title>
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
                <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
                <df-messenger chat-icon="<?=base_url()?>assets/sipeka/img/chubby-bot.png" chat-title="CHUBBY: Chat Bot Virtual" agent-id="e54be6f6-4f23-484d-930c-a07dc7f4a973" language-code="id" title="Chat Bot Virtual Anda" wait-open="true" user-id="98d9f010b0c8e744a8fa0d01bbf0dd99991504" session-id="dfMessenger-336449" api-uri="https://dialogflow.cloud.google.com/v1/integrations/messenger/webhook"></df-messenger>
                <!-- #shadow-root (open) -->
                <style scope="df-messenger">.df-messenger-wrapper {
                    background-color: white;
                    border: 0;
                    bottom: 20px;
                    color: rgba(0,0,0,0.87);
                    font-family: 'Roboto', sans-serif;
                    font-size: 14px;
                    font-weight: normal;
                    margin: 0;
                    padding: 0;
                    position: fixed;
                    right: 20px;
                    text-decoration: none;
                    z-index: 100;
                }

                .df-messenger-wrapper a, .df-messenger-wrapper button {
                cursor: pointer;
                }

                .df-messenger-wrapper svg {
                fill: rgba(0,0,0,0.87);
                    margin: 0;
                    padding: 0;
                }

                .df-messenger-wrapper img {
                border: 0;
                    margin: 0;
                    padding: 0;
                }

                button#widgetIcon {
                background: #42A5F5;
                    background: var(--df-messenger-button-titlebar-color);
                    border: none;
                    border-radius: 50%;
                    bottom: 0px;
                    box-shadow: rgba(0, 0, 0, 0.24) 1px 4px 15px 0px;
                    cursor: pointer;
                    height: 56px;
                    position: absolute;
                    right: 0px;
                    width: 56px;
                }

                button#widgetIcon:focus {
                outline-width: 0;
                }

                button#widgetIcon .df-chat-icon {
                height: 36px;
                    left: 10px;
                    opacity: 1;
                    position: absolute;
                    top: 10px;
                    transition: opacity 0.5s;
                    width: 36px;
                }

                button#widgetIcon .df-chat-icon.hidden {
                opacity: 0;
                }

                button#widgetIcon div.rotate-fade #closeSvg {
                opacity: 1;
                    transform: rotate(-90deg);
                }

                button#widgetIcon div #closeSvg {
                fill: white;
                    fill: var(--df-messenger-button-titlebar-font-color);
                    left: 15px;
                    opacity: 0;
                    position: absolute;
                    top: 15px;
                    transition: transform 0.5s, opacity 0.5s;
                }

                button#widgetIcon .df-chat-icon.default {
                display: none;
                }

                button#widgetIcon .df-chat-icon.default.show {
                display: initial;
                }

                @media screen and (max-width: 500px) {
                .expanded > #widgetIcon {
                visibility: hidden;
                }

                }

                @media screen and (min-width: 501px) {
                .expanded > #widgetIcon {
                visibility: visible;
                }

                }

                .cls-1 {
                clip-path: url(#clip-path);
                }

                .cls-2 {
                fill: #ef6c00;
                }

                .cls-3 {
                fill: #ff9800;
                }

                .cls-4 {
                fill: #bf360c;
                }

                .cls-4, .cls-5 {
                opacity: 0.1;
                }

                .cls-5 {
                fill: #fff;
                }
                </style>
                <div class="df-messenger-wrapper">
                    <df-messenger-chat></df-messenger-chat>
                    <button id="widgetIcon"><img class="df-chat-icon" src="<?=base_url()?>assets/sipeka/img/chubby-bot.png">
                    <div class="df-chat-icon default">
                        <svg height="64px" width="64px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="11999 18083 41 52">
                        <defs>
                            
                            <clipPath id="clip-path">
                            <path id="Path_1082" data-name="Path 1082" d="M39.217,10.27,22.275.48a3.559,3.559,0,0,0-3.554,0L1.779,
                                10.27A3.572,3.572,0,0,0,.01,13.357v19.6a3.569,3.569,0,0,0,
                                1.769,3.079l8.479,4.907v10a1.064,1.064,0,0,0,1.071,1.064,
                                1.013,1.013,0,0,0,.527-.146L39.241,36.041a3.532,3.532,0,0,0,
                                1.769-3.079v-19.6A3.575,3.575,0,0,0,39.217,10.27Z" transform="translate(0 0)"></path>
                            </clipPath>
                        </defs>
                        <g id="Group_1192" data-name="Group 1192" class="cls-1" transform="translate(11998.99 18082.994)">
                            <path id="Path_1078" data-name="Path 1078" class="cls-2" d="M0,13.91V37.6l10.248,5.923V55.377L40.984,
                                37.6V13.91L20.5,25.755Z" transform="translate(0.002 -2.608)"></path>
                            <path id="Path_1079" data-name="Path 1079" class="cls-3" d="M0,11.175,20.5-.67,40.984,11.175,20.5,23.021Z" transform="translate(0.002 0.127)"></path>
                            <path id="Path_1080" data-name="Path 1080" class="cls-4" d="M40.5,13.56,20.139,25.332.13,13.763,
                                0,13.844,20.5,25.69,40.984,13.844Z" transform="translate(0.002 -2.542)"></path>
                            <path id="Path_1081" data-name="Path 1081" class="cls-5" d="M20.5,25.772.13,14,0,14.073,20.5,25.918Z" transform="translate(0.002 -2.625)"></path>
                        </g>
                        </svg>
                    </div>
                    <div id="closeIcon">
                        <svg id="closeSvg" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59
                            12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        </svg>
                    </div>
                    </button>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header text-center" style="color: #FFF;"><i class="fa fa-star"></i> ADMIN ZED </span> <i class="fa fa-star"></i></li>
                    <li class=""><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="<?=site_url('profil')?>"><i class="fa fa-user"></i> <span>Profil</span></a></li>
                    <li class="active"><a href="<?=site_url('chatbot')?>"><i class="fa fa-commenting"></i> <span>Chat BOT Virtual</span> <span class="label label-warning">Beta</span></a></li>
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
		<h1>Chat Bot Virtual</h1>
		<p>Aplikasi bot virtual dengan kemampuan pemrosesan bahasa alami</p>
	</section>
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<p>******SELAMAT DATANG*******</p>
				<p>Hallo teman-teman SIPEKA Jepara,<br />Perkenalkan Saya Bot Virtual aplikasi pengganti resepsionis RSUD RA. Kartini yang akan menemani dan menolong teman-teman. Kalian bisa menyebut Saya dengan sebutan "Chubby"</p>
				<p>Saya dibuat untuk meringankan dan memudahkan teman-teman dalam pencarian Informasi yang berkaitan dengan RSUD RA. Kartini.</p>
				<p>Chubby menyediakan beberapa fitur Informasi buat teman-teman.
					<ul>
						<li>INFO CHAT BOT VIRTUAL</li>
						<li>INFO DATA RSUD RA. KARTINI</li>
						<li>INFO TOTAL PEGAWAI RSUD RA. KARTINI</li>
						<li>INFO INDEKS PELAYANAN RSUD RA. KARTINI</li>
						<li>INFO KALENDER EVENT RSUD RA. KARTINI</li> 
						<li>INFO PERATURAN RSUD RA. KARTINI</li>
					</ul>
				</p>
				<p>silahkan klik avatar disudut kanan bawah :)<br />Teman-teman enjoy aja ya :)...... gunakan bahasa santai teman juga boleh, tapi tidak dengan bahasa yang kurang sopan :). Berikut beberapa contoh pertanyaan/permintaan yang dapat teman-teman ajukan:
					<ul>
						<li>Hai, kamu siapa?</li>
						<li>Berapa Indeks Pelayanan sekarang</li>
						<li>Mau tanya total pegawai rs</li>
						<li>Jadwal event dimulai</li>
					</ul>
				</p>
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