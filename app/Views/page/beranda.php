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
    <title>RSUD RA. KARTINI</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets-kartini/csslogin/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets-kartini/csslogin/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets-kartini/csslogin/blog-post.css" rel="stylesheet">
    <link href="<?=base_url()?>assets-kartini/csslogin/gaya-rekrutmen.css" rel="stylesheet">
    <link href="<?=base_url()?>assets-kartini/csslogin/rekrutmen.css" rel="stylesheet">
    <link href="<?=base_url()?>assets-kartini/csslogin/halaman.css" rel="stylesheet" type="text/css">

    <style>
        .button-download {
            background-color: lightblue; /* Green */
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }
        .btn-terdahulu {
            background-color: #3293AB; 
            border: none;
            color: white;
            padding: 5px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
}
        .btn-lamar {
            background-color: orange; 
            border: none;
            color: white;
            padding: 5px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
}
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card>.list-group:first-child .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .card>.list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card-title {
            margin-bottom: 0.75rem;
        }

        .card-subtitle {
            margin-top: -0.375rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link+.card-link {
            margin-left: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        }

        .card-header+.list-group .list-group-item:first-child {
            border-top: 0;
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-top: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
        }

        .card-header-tabs {
            margin-right: -0.625rem;
            margin-bottom: -0.75rem;
            margin-left: -0.625rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.625rem;
            margin-left: -0.625rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
        }

        .card-img {
            width: 100%;
            border-radius: calc(0.25rem - 1px);
        }

        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);

        }

        .card-img-bottom {
            width: 100%;
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px);
        }

        .card-deck {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .card-deck .card {
            margin-bottom: 15px;
        }

        @media (min-width: 576px) {
            .card-deck {
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px;
            }

            .card-deck .card {
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px;
            }
        }

        .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .card-group>.card {
            margin-bottom: 15px;
        }

        @media (min-width: 576px) {
            .card-group {
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }

            .card-group>.card {
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0;
            }

            .card-group>.card:first-child {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group>.card:first-child .card-img-top,
            .card-group>.card:first-child .card-header {
                border-top-right-radius: 0;
            }

            .card-group>.card:first-child .card-img-bottom,
            .card-group>.card:first-child .card-footer {
                border-bottom-right-radius: 0;
            }

            .card-group>.card:last-child {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group>.card:last-child .card-img-top,
            .card-group>.card:last-child .card-header {
                border-top-left-radius: 0;
            }

            .card-group>.card:last-child .card-img-bottom,
            .card-group>.card:last-child .card-footer {
                border-bottom-left-radius: 0;
            }

            .card-group>.card:only-child {
                border-radius: 0.25rem;
            }

            .card-group>.card:only-child .card-img-top,
            .card-group>.card:only-child .card-header {
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
            }

            .card-group>.card:only-child .card-img-bottom,
            .card-group>.card:only-child .card-footer {
                border-bottom-right-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
            }

            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
                border-radius: 0;
            }

            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
                border-radius: 0;
            }
        }

        .card-columns .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-columns {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }
        }

        .accordion .card:not(:first-of-type):not(:last-of-type) {
            border-bottom: 0;
            border-radius: 0;
        }

        .accordion .card:not(:first-of-type) .card-header:first-child {
            border-radius: 0;
        }

        .accordion .card:first-of-type {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .accordion .card:last-of-type {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }


        .full-width-div {
            position: relative;
            *width: 100%;
            *left: 0;
            *border: 2px solid red !important;
        }

        col-lg-12 {
            padding: 0 0px;
        }

        /****/

        .area-atas span:nth-child(1) {
            *display: inline-block;
            *border: 1px solid red;
            *float: left;
        }

        .area-atas span img {
            *border: 2px solid red;
            position: absolute;
            *display: inline-block;
        }

        .area-atas span:nth-child(2) {
            *border: 1px solid cyan;
            color: #FFF;
            position: absolute;
            left: 120px;
            text-transform: uppercase;
            font-size: 26px;
            font-style: italic;
            *display: inline-block;
        }

        /****/

        a.navbar-brand {
            margin-left: 110px !important;
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            *background: #9C3;
            color: #FFF !important;
        }

        .nav.navbar-nav.navbar-right li a {
            color: #FFF;
            text-transform: uppercase;
        }

        @media screen and (max-width:767px) {
            .container.atas div.navbar-header {
                padding-left: 10px;
                padding-right: 10px;
            }

            a.navbar-brand {
                margin-left: 0px !important;
            }
        }
    </style>

    <!-- jQuery -->
    <script src="<?=base_url()?>assets-kartini/csslogin/jquery.js.download"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets-kartini/csslogin/bootstrap.min.js.download"></script>

    <!-- jQuery Version 1.11.1 -->
    <script src="<?=base_url()?>assets-kartini/csslogin/jquery.js(1).download"></script>
    <script type="text/javascript" src="<?=base_url()?>assets-kartini/csslogin/bootstrap.js.download"></script>

    <script src="<?=base_url()?>assets-kartini/csslogin/eModal.js.download"></script>
    <script>
        function openPopup() {
            //document.getElementById("demo").innerHTML = "Hello World";
            //alert('hhh');
            // Display a ajax modal, with a title
            eModal.ajax('ubah_password.php', 'UBAH PASSWORD')
            //  .then(ajaxOnLoadCallback);
        }

        function openPopupFile(link_file, judul) {
            //document.getElementById("demo").innerHTML = "Hello World";
            //alert('hhh');
            // Display a ajax modal, with a title
            eModal.ajax(link_file, judul)
            //  .then(ajaxOnLoadCallback);
        }
    </script>

    <!-- FIXED MENU -->
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function () {
            $(document).ready(function () {

                $(window).scroll(function () {
                    //if you hard code, then use console
                    //.log to determine when you want the 
                    //nav bar to stick.  
                    console.log($(window).scrollTop())
                    if ($(window).scrollTop() < 79) {
                        $('.area-atas').fadeIn();
                    }
                    if ($(window).scrollTop() > 80) {
                        $('.area-atas').fadeOut();
                    }
                });
            });
        }); //]]> 

        function reloadCaptchaDinamis(value, json) {
            $('#' + value).attr('src', json + '?random=' + (new Date).getTime() +
                'width=100&amp;height=40&amp;characters=5');
        }

        function setModal(target, link_url) {
            var s_url = link_url;
            var request = $.get(s_url);

            request.done(function (msg) {
                if (msg == '') {} else {
                    $('#' + target).html(msg);
                }
            });
            //alert(target+'--'+link_url);
        }
    </script>

    <!-- GlossyAccordionMenu -->
    <link rel="stylesheet" href="<?=base_url()?>assets-kartini/csslogin/glossymenu.css" type="text/css">

    <!-- PAGINATION -->
    <link rel="stylesheet" href="<?=base_url()?>assets-kartini/csslogin/style.css">
    <!-- Resource style -->
    <script src="<?=base_url()?>assets-kartini/csslogin/modernizr.js.download"></script>
    <!-- Modernizr -->

    <style>
        .col-md-6.career-nama {
            padding-left: 0px;
        }

        @media screen and (max-width:767px) {
            .nav.navbar-nav.navbar-right li a {
                *border: 2px solid red;
                padding-left: 25px;
                *padding-right: 15px;
            }

            .col-md-6.career-nama span:nth-child(1) img {
                height: 60px;
                margin-left: 25px;
            }

            .col-md-6.career-nama span:nth-child(2) {
                font-size: 11px;
                width: 100px;
                line-height: normal !important;
                margin-top: 7px;
            }

            a.link-web-utama {
                margin-right: 25px;
            }

            .container-fluid.banner-home {
                display: none;
            }

            .row.main-home {
                margin-top: 0px !important;
            }

            .row.main-detil {
                margin-top: 0px !important;
            }

            /****/
            footer .col-lg-8.text-left p {
                text-align: center !important;
                border-bottom: 1px solid #2c7bbf;
                padding-bottom: 10px;
            }

            footer .col-md-4.text-right {
                text-align: center !important;
            }
        }
    </style>

    <style>
        @media screen and (max-width:767px) {

            html,
            body {
                *overflow: hidden !important;
            }
        }
    </style>

    <!-- STEP PROGRESS -->
    <link href="<?=base_url()?>assets-kartini/csslogin/progress-wizard.min.css" rel="stylesheet">

</head>
<!--<body style="padding-top: 70px;">-->

<body style="padding-top: 70px;">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"
        style="background-color:transparent; border-bottom:none !important;">
        <div class="container-fluid" style="padding-left:0px; padding-right:0px; background: #5db8cf; height:70px">  

            <!-- <div class="row area-atas" style="display: none;"> -->

            <div class="container atas">
                <div class="col-md-6 career-nama">
                    <span><img src="<?=base_url()?>assets-kartini/csslogin/rsudkartini.png" style="width: 50px;"></span>
                    <!-- <span>Career and Recruitment Center</span> -->
                    <a class="navbar-brand" href="<?=site_url()?>" style="position: absolute; left :0%; bottom: -20%; font-size:5vh; margin-top:-5vh ;padding-left: 0%;">SIPEKA</a>
                </div>
            </div>
            
                    <a href="<?=site_url('login')?>" ctype="button" style="position: absolute; right :5%; bottom: 25%;" !important class="btn btn-terdahulu">LOGIN</a>
        </div>
    </nav>

    <div class="container-fluid banner-home">
        <div class="row">
            <div class="col-lg-12" style="padding-left:0px; padding-right:0px;">
                <div class="full-width-div">
                    <ul class="rslides rslides1" id="slider1" style="width:100% !important;">
                        <li id="rslides1_s0" class="rslides1_on"
                            style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 800ms ease-in-out 0s;">
                            <img src="<?=base_url()?>assets-kartini/csslogin/banner-kartini.png" style ="padding-left: 142px;padding-right: 142px; height:150%" alt="Banner SIMPERAK RSUD"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container" style="background:#FFF;">
        <div class="row main-home sisi-utama">

            <!-- TICKER -->
            <link href="<?=base_url()?>assets-kartini/csslogin/global.css" rel="stylesheet" type="text/css">
            <script src="<?=base_url()?>assets-kartini/csslogin/jquery.js(2).download"></script>
            <link href="<?=base_url()?>assets-kartini/csslogin/css.css" rel="stylesheet" type="text/css">

            <style>
                .lowongan-area {
                    *min-height: 600px;
                }

                .navigasi-area {
                    border: 0px solid red;
                    margin-top: -50px;
                    margin-bottom: -30px;
                }

                @media screen and (max-width:767px) {
                    .navigasi-area {
                        border: 0px solid red;
                        margin-top: 10px;
                        margin-bottom: -30px;
                    }
                }
            </style>

            <div class="col-lg-12">

                <div class="informasi-ticker-area">
                    <div class="title">Event Terbaru</div>
                </div>
                <!-- <div  style="position:relative;"!important >
                    <a href="<?=site_url('Event_depan')?>" ctype="button" style="position: absolute; right: 0px; bottom: 5px;" !important class="btn btn-terdahulu">EVENT TERDAHULU</a>
                </div> -->
                <!-- <div class="row">
                    
                    <div class="col-4 col-md-3 col-lg-4">
                        <div class="card">
                        
                            
                        </div>
                    </div>
                    
                </div> -->
                <div class="informasi-ticker-area-event-terdahulu">
                </div>
                <div  style="position:relative;"!important >
                    <a href="<?=site_url('Event_depan')?>" ctype="button" style="position: absolute; left :32%; bottom: 5px;" !important class="btn btn-terdahulu">EVENT TERDAHULU</a>
                </div>
                
                <div class="informasi-ticker-area" style="margin-top: 20px;">
                    <div class="title">Lowongan Aktif</div>
                </div>
                
                <div class="table-responsive">
                    <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;margin-bottom:70px">
                        <thead>
                            <tr>
                                <th style="font-size:large;">Jabatan</th>
                                <th style="font-size:large; text-align: center;">Deskripsi</th>
                                <th style="font-size:large; text-align: center;">Persyaratan</th>
                                <th style="font-size:large; text-align: center;">Deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                        </tbody>
                    </table> 
                </div>   
                        <div  style="position:relative; margin-bottom:20px"!important >
                            <a href="<?=site_url('Lamar')?>" ctype="button" style="position: absolute; left :32%; bottom: 5px;" !important class="btn btn-lamar">LAMAR SEKARANG</a>
                        </div>
                </div>
                

            </div>

            <!-- TICKER -->
            <script>
                function tick2() {
                    $('#ticker_02 li:first').slideUp(function () {
                        $(this).appendTo($('#ticker_02')).slideDown();
                    });
                }
                setInterval(function () {
                    tick2()
                }, 3000);
            </script>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="bg-dark">
        <div class="container">
            <p class="m-0 text-center" style="color:white">Copyright &copy; RSUD RA. Kartini 2023</p>
        </div>
    </footer>

    <!-- RESPONSIVE SLIDE -->
    <link rel="stylesheet" href="<?=base_url()?>assets-kartini/csslogin/responsiveslides.css">
    <script src="<?=base_url()?>assets-kartini/csslogin/responsiveslides.min.js.download"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                //maxwidth: 800,
                speed: 800
            });

        });
    </script>

</body>

</html>