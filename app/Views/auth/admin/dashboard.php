<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Metadata dokumen -->    
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="description" content="Sistem Informasi Manajemen Rumah Sakit">
  		    <meta name="keywords" content="rs, hospital, rumah sakit">
  		    <meta name="author" content="MOT">
	     
		<!-- Pemanggilan file style -->
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/select2.min.css">
			<link rel="stylesheet" href="assets/css/AdminLTE.min.css">
			<link rel="stylesheet" href="assets/css/skin-red.min.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
			
			<style>
			    .alert {
                    position: relative;
                    top: 10;
                    left: 0;
                    width: auto;
                    height: auto;
                    padding: 10px;
                    margin: 10px;
                    line-height: 1.8;
                    border-radius: 5px;
                    cursor: hand;
                    cursor: pointer;
                    font-family: sans-serif;
                    font-weight: 400;
                }

                .alertCheckbox {
                  display: none;
                }
    
                :checked + .alert {
                  display: none;
                }
    
                .alertText {
                  display: table;
                  margin: 0 auto;
                  text-align: center;
                  font-size: 16px;
                }
    
                .alertClose {
                  float: right;
                  padding-top: 5px;
                  font-size: 10px;
                }
    
                .clear {
                  clear: both;
                }
                
                .info {
                  background-color: #EEE;
                  border: 1px solid #DDD;
                  color: #999;
                }
                
                .success {
                  background-color: #EFE;
                  border: 1px solid #DED;
                  color: #9A9;
                }
                
                .notice {
                  background-color: #EFF;
                  border: 1px solid #DEE;
                  color: #9AA;
                }
                
                .warning {
                  background-color: #FDF7DF;
                  border: 1px solid #FEEC6F;
                  color: #C9971C;
                }
                
                .error {
                  background-color: #FEE;
                  border: 1px solid #EDD;
                  color: #A66;
                }
        </style>
			
			
	</head>
	<body class="hold-transition skin-red sidebar-mini">
	    <?php $user = $this->ion_auth->user()->row();
	    
	     if($this->ion_auth->in_group('pegawai')):?>
	    <div style = "display: flex; justify-content: center;">
            <label>
              <input type="checkbox" class="alertCheckbox" autocomplete="off" />
              <div class="alert warning">
                <span class="alertClose">X</span>
                <span class="alertText">Masa Berlaku STR Anda akan berakhir pada <?=$user->habis_str?>
            		<br class="clear"/></span>
              </div>
            </label>
            
            <label>
              <input type="checkbox" class="alertCheckbox" autocomplete="off" />
              <div class="alert error">
                <span class="alertClose">X</span>
                <span class="alertText">Masa Berlaku SIP Anda akan berakhir pada <?=$user->tgl_sip?>
                    <!--Masa Berlaku SIP Anda akan berakhir pada HARI INI 2-->
            		<br class="clear"/></span>
              </div>
            </label>
        </div>
        <?php endif; ?>
        
	    <div class="content-wrapper">
	        <!--<label>-->
         <!--     <input type="checkbox" class="alertCheckbox" autocomplete="off" />-->
         <!--     <div class="alert info">-->
         <!--       <span class="alertClose">X</span>-->
         <!--       <span class="alertText">Masa Berlaku STR Anda akan berakhir pada -->
         <!--   		<br class="clear"/></span>-->
         <!--     </div>-->
         <!--   </label>-->
            
         <!--   <label>-->
         <!--     <input type="checkbox" class="alertCheckbox" autocomplete="off" />-->
         <!--     <div class="alert success">-->
         <!--       <span class="alertClose">X</span>-->
         <!--       <span class="alertText">Masa Berlaku SIP Anda akan berakhir pada -->
         <!--   		<br class="clear"/></span>-->
         <!--     </div>-->
         <!--   </label>-->
            
         <!--   <label>-->
         <!--     <input type="checkbox" class="alertCheckbox" autocomplete="off" />-->
         <!--     <div class="alert notice">-->
         <!--       <span class="alertClose">X</span>-->
         <!--       <span class="alertText">Bla Bla Bla-->
         <!--   		<br class="clear"/></span>-->
         <!--     </div>-->
         <!--   </label>-->
        
        
       
        
     
            
	        <section class="content-header">
	        	<p>Ringkasan informasi untuk Anda</p>
        	</section>
        	<section class="content container-fluid">
		        <div class="row">
			        <div class="col-md-10">
				        <div class="box box-danger">
				            <div class="box-body text-center">
							    <div class="box-body">
								    <div class="row">
										<div class="box box-danger">
							                <div class="box-header with-border">
								                <h3 class="box-title">Peraturan Kepegawaian</h3>
							                </div>
							                
							                <div class="box-body">
							                     <?php foreach ($list as $p):?>
								                <ul class="timeline">
									                <li><i class='fa fa-bullhorn bg-blue'></i>
									                <div class='timeline-item'>
									                    <span class='time'><i class='fa fa-calendar'></i> Publikasi: <?=$p->job_deadline?></span>
								                            <h3 class='timeline-header'><strong><?=$p->job_jabatan?></strong></h3>
							                            <div class='timeline-body'>
				                                            <p style="font-size:medium; text-align: left;"><?=$p->job_desc?></p>
				                                            <div style="font-size:medium; text-align: center;">
                                                                        <?php if($p->file != null): ?>
                                                                        <a download href="<?php echo base_url().'uploads/'.$p->file?>" class="btn btn-primary" style="position: relative;">Download</a>
                                                                        <?php endif?>
				                                            </div>
									                    </div>
								                    </div>
								                    </li>
							            	    </ul>	
							            	     <?php endforeach; ?>
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
	</body>
</html>
