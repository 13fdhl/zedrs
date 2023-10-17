<!--<?php if($message = $this->session->flashdata('message')): ?>    -->
<!--    <div class="col-md-12">    -->
<!--    <div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>"><?php echo $message['message']; ?>-->
<!--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--            <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--    </div>    -->
<!--</div>-->
<!--<?php endif; ?>-->

<div class="col-md-12">
    <div class="card">
      
        <div class="card-body">            
            <div class="table-responsive" >
                <table id="data-table" style="width: 100%; cellspacing: 0;" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Golongan</th>                            
                            <th style="text-align:center">Masa Kerja</th>
                            <th style="text-align:center">Gaji Pokok</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        <?php $no = 0; foreach($gajiPokok as $row): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no; ?></td>
                            <td style="text-align:center"><?php echo $row->gaji_gol; ?></td>                            
                            <td style="text-align:center"><?php echo $row->gaji_masker; ?> Tahun</td>
                            <td style="text-align:center">Rp. <?php echo number_format($row->gaji_pokok, 2, ',', '.'); ?></td>
                            <td style="text-align:center">
                                <a 
                                    href = "javascript:;"
                                    data-id = "<?php echo $row->gaji_id; ?>"
                                    data-golongan = "<?php echo $row->gaji_gol; ?>"
                                    data-masker = "<?php echo $row->gaji_masker; ?>"
                                    data-gaji = "<?php echo $row->gaji_pokok ?>"
                                    data-toggle="modal" data-target="#modal">
                                    <button class="btn btn-primary" data-target="#ubah" data-toggle="modal" data-placement="top" title="Ubah"><i class="fas fa-edit"></i></button>                                                              
                                </a>                                
                            </td>
                        </tr>                    
                        <?php endforeach; ?>                                                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary border-0">
                <h5 class="modal-title text-white">Ubah Gaji Pokok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  
            <form id="ubah-gaji-form" method="post" action="">                    
            <div class="modal-body">             
                <div class="col-md-12">   
                    <div class="form-group">
                        <label class="form-control-label">Gologan</label>
                        <input type="hidden" id="id" name="id" value=""/>
                        <input id="golongan" name="golongan" class="form-control" value="" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Masa Kerja (Tahun)</label>
                        <input id="masker" name="masa_kerja" class="form-control" value="" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Gaji Pokok</label>
                        <input id="gaji" name="gaji_pokok" class="form-control" value=""/>                        
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <button type="submit" name="submit" value='.$row->gaji_id.' class="btn btn-primary">Perbaharui</button>
            </div>            
            </form>
        </div>
    </div>
</div>