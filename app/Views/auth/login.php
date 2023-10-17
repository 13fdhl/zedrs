<!DOCTYPE html>
<html>

<head>
    <!-- Metadata dokumen -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistem Informasi Kepegawaian RSUD RA. Kartini Kota Jepara">
    <meta name="keywords" content="rsud, kartini, sipeka">
    <meta name="author" content="zed">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SIPEKA : Login</title>
    <!-- Pemanggilan file style -->
    <link rel="shortcut icon" href="siakad/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url()?>assets-login/bower_component/bootstrap_dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets-login/bower_component/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets-login/dist_css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
    img{
        width:90px;
        height:90px;
    }
</style>

<body class="hold-transition">
    <div class="wrapper">

        <div class="box box-widget widget-user">
            <div class="widget-user-header bg-blue">
                <h3 class="widget-user-username text-center">SIPEKA JEPARA</h3>
            </div>
            <div class="widget-user-image">
                <center>
                    <img class="img-round" src="<?=base_url()?>assets-login/sipeka/img/logo-rs-kartini.png" alt="SIPEKA JEPARA" />
                </center>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div class="description-block">
                            <h4 class="text-center">Sistem Informasi Kepegawaian RSUD RA. Kartini Kota Jepara</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="box box-danger">
                            <div class="login-box-body">
                                <form id="frmLogin" action="" method="post">
                                    <div class="form-group has-feedback">
                                        <input type="email" name="txtAlamatEmail" class="form-control" required="required" placeholder="Alamat Email" value="" />
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" name="txtKataSandi" class="form-control" required="required" autocomplete="off" placeholder="Kata Sandi" />
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                                    <div class="form-group text-center">
                                        <!-- <button name="cmdLogin" type="submit" class="btn btn-danger btn-block btn-flat" value="Login"><i class="fa fa-lock"></i> LOGIN</button> -->
                                        <a href="<?=site_url('dashboard')?>" ctype="button" name="cmdLogin" type="submit" class="btn btn-danger btn-block btn-flat" value="Login"><i class="fa fa-lock"></i>LOGIN</a>
                                    </div>
                                </form>
                            </div>
                            <div id="divOverlayLogin" class="overlay hide">
                                <i class="fa fa-refresh fa-spin"></i>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            &copy; @zed</div>
    </div>
    <script type="text/javascript" src="<?=base_url()?>assets-login/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets-login/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets-login/js/login.js"></script>
</body>

</html>