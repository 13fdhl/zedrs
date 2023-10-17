<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" style="width: 100%; cellspacing: 0;" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama</th>
                            <th style="text-align:center">NIP</th>                            
                            <th style="text-align:center">TMT KGB</th>                            
                            <th style="text-align:center">KGB Selanjutnya</th>                            
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampil di Operator BKD -->
                        <!--<?php if($this->session->userdata('level') === '11'): ?>-->
                        <?php $no = 0; foreach($daftar_nominatif as $row): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no; ?></td>
                            <td><?php echo $row->asn_nama; ?></td>
                            <td style="text-align:center"><?php echo $row->asn_nip; ?></td>                            
                            <td style="text-align:center"><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>                                                        
                            <td style="text-align:center">
                                <?php 
                                    $date = date_create($row->riwayatkgb_tmt);
                                    date_add($date,date_interval_create_from_date_string("2 years"));
                                    echo date_format($date,"d/m/Y");
                                ?>
                            </td>
                            <td style="text-align:center">    
                                <a
                                    href = "javascript:;"                                
                                    data-id = "<?php echo $row->riwayatkgb_id; ?>"
                                    data-nama = "<?php echo $row->asn_nama; ?>"
                                    data-nip = "<?php echo $row->asn_nip; ?>"
                                    data-toggle="modal" data-target="#modal">
                                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="KGB"><i class="fas fa-tasks"></i></button>                                                              
                                    <a href="<?php echo site_url('riwayat-proses/pegawai/' .$row->asn_nip); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Riwayat Proses KGB"><i class="fas fa-history"></i></a>
                                </a>                                
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <!--<?php endif; ?>-->
                        <!-- Tampil di TU OPD -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary border-0">
                <h5 class="modal-title text-white">Berkas KGB</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  
            <form id="ubah-gaji-form" method="post" action="">                    
            <div class="modal-body">             
                <div class="col-md-12">   
                    <div class="form-group">
                        <label class="form-control-label">Nama</label>
                        <input id="id" name="id" type="hidden"/>
                        <input id="nama" class="form-control" value="" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">NIP</label>
                        <input id="nip" name="nip" class="form-control" value="" readonly/>
                    </div>                    
                    <div class="form-group">
                        <label class="form-control-label">SKPD</label>
                        <input id="skpd" class="form-control" value="" readonly/>                        
                    </div>
                </div>
                <div class="col-md-12">  
                    <hr>                  
                    <div>
                        <p>Kelengkapan berkas :</p>
                    </div>                    
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" name="spskpd" value="Y"> Surat Pengantar SKPD<br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" name="skp" value="Y"> SKP terakhir<br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" name="skkgb" value="Y"> SK KGB terakhir<br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" name="skpangkat" value="Y"> SK pangkat terakhir<br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">                                                                    
                <button type="submit" name="form" value='.$row->riwayatkgb_id.' class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Berkas lengkap"><i class="fab fa-wpforms"></i> &nbsp; Form KGB</button>
                <button type="submit" name="tunda" value='.$row->riwayatkgb_id.' class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Berkas tidak lengkap"><i class="fa fa-sync"></i> &nbsp; Tunda KGB</button>                                
            </div>            
            </form>
        </div>
    </div>
</div>