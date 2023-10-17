<div class="row">
  <div class="col-md-12">
    <div class="panel panel-white">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
              <th style="width: 50px; text-align:center">No</th>
                <th style="width: 150px; text-align:center">Name</th>
                <th style="width: 150px; text-align:center">No. Pegawai</th>
                <th style="width: 300px; text-align:center;">Period</th>
                <th style="width: 300px; text-align:center;">Cuti</th>
                <th style="width: 50px; text-align:center;">Perihal</th>
                <th style="width: 350px; text-align: center;">Deskripsi</th>
                <th style="width: 350px; text-align: center;">Pengganti</th>
                <th style="width: 350px; text-align: center;">File</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center; width: 100px;">Approval Atasan</th>
                <th style="text-align: center; width: 100px;">Approval Pengganti</th>
                <th style="text-align: center;">Tindakan</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                foreach ($list as $r):  
                  if($r->user_id==$user_id){
                    continue;
                  }
                $no++;
              ?>
              <tr>
              <td style="text-align: center;"><?=$no;?></td>
                <td style="text-align: center;"><?=$r->first_name?></td>
                <td style="text-align: center;"><?=$r->username?></td>
                <td style="text-align: center;"><?=$r->sdate?><br> sampai <br><?=$r->edate?></td>
                <td style="text-align: center;"><b><?php if($r->cuti==1){echo'Cuti Tahunan';}if($r->cuti==2){echo'Cuti Sakit';}if($r->cuti==3){echo'Cuti Alasan Penting';}if($r->cuti==4){echo'Cuti Melahirkan';}if($r->cuti==5){echo'Izin';}?></b></td>
                <td style="text-align: center;"><b><?php if($r->perihal==1){echo'Keluarga Sakit Keras / Meninggal';}if($r->perihal==2){echo'Istri Melahirkan';}if($r->perihal==3){echo'Melaksanakan Ibadah';}if($r->perihal==4){echo'Melangsungkan Pernikahan';}?></b></td>
                <td style="text-align: center;"><?=$r->alasan?></td>
                <td style="text-align: center;"><?php 
                                                      $nsub=$r->user_id_sub;
                                                      $teman = $this->ion_auth->user($nsub)->row();;
                                                      echo $teman->first_name ?? 'Tidak Ada Pengganti';
                                                ?>
                </td>
                <td style="text-align: center;">
                  <?php if($r->file_cuti != null && $r->file_cuti != "default.jpg"):?>
                  <a href="<?php echo base_url().'uploads/cuti/'.$r->file_cuti;?>" target="_blank"
                    class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                  &nbsp;
                  <a download href="<?php echo base_url().'uploads/cuti/'.$r->file_cuti;?>" class="fa fa-download"
                    style="margin-bottom: 2px">Download</a>
                  <a href="<?=base_url().'admin/karyawan/qrcodeGenerator/'.base64_encode(site_url('uploads/cuti/'.$r->file_cuti))?>"
                    class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                  <?php endif;?>
                </td>
                <td style="text-align: center;">
                  <?php if($r->sukses=="1") : ?>
                  <button type="button" class="btn btn-success">SUKSES</button>
                  <?php elseif($r->sukses=="-1" || $r->status_sub=="-1") : ?>
                  <button type="button" class="btn btn-danger">GAGAL</button>
                  <?php elseif($r->status=="0") : ?>
                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Pending
                    Verifikasi</button>
                  <?php else : ?>
                  <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                  <?php endif; ?>
                </td>
                <td style="text-align: center;">
                <?php if($r->sukses=="1") : ?>
                  <button type="button" class="btn btn-success" style="">Approved</button>
                  <?php elseif($r->status_sub=="0" && !$r->user_id_sub=="0") : ?>
                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Pending
                    Pengganti</button>
                  <?php elseif($r->status=="1") : ?>
                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Pending
                    Kepala Ruang</button>
                  <?php elseif($r->status=="2") : ?>
                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Pending
                    Kasubag</button>
                  <?php elseif($r->status=="3") : ?>
                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Pending
                    Kabag</button>
                  <?php elseif($r->status=="4") : ?>
                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Pending
                    Wadirum</button>
                  <?php elseif($r->status=="5") : ?>
                  <button type="button" class="btn btn-success" style="">Approved</button>
                  <?php else : ?>
                  <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                  <?php endif; ?>
                </td>
                <td style="text-align: center;">
                  <?php if($r->status_sub=="0" && $r->user_id_sub !="0") : ?>
                  <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                  <?php elseif($r->status_sub=="1" && $r->user_id_sub !="0") : ?>
                  <button type="button" class="btn btn-success">Approved</button>

                  <?php elseif($r->status_sub=="-1" && $r->user_id_sub !="0") : ?>
                  <button type="button" class="btn btn-danger">Rejected</button>
                  <?php endif; ?>
                </td>
                <td style="text-align: center;">
                  <?php if ($r->status_sub=="1" && $r->sukses=="0" && $r->status=="1" && $this->ion_auth->in_group('kepruang') && $r->cuti!=5) { ?>
                    <a href="<?=site_url('admin/approval_cuti/setuju/'.$r->a_id)?>" class="fa fa-check-circle fa-2x"
                      style="color:green"></a>
                    <a href="<?=site_url('admin/approval_cuti/tolak/'.$r->a_id)?>" class="fa fa-times-circle fa-2x"
                      style="color:red"></a>
                  <?php } ?>
                  <?php if ($r->status_sub=="1" && $r->sukses=="0" && $r->status=="2" && $this->ion_auth->in_group('kasubag') && $r->cuti!=5) { ?>
                    <a href="<?=site_url('admin/approval_cuti/setuju/'.$r->a_id)?>" class="fa fa-check-circle fa-2x"
                      style="color:green"></a>
                    <a href="<?=site_url('admin/approval_cuti/tolak/'.$r->a_id)?>" class="fa fa-times-circle fa-2x"
                      style="color:red"></a>
                  <?php } ?>
                  <?php if ($r->status_sub=="1" && $r->sukses=="0" && $r->status=="3" && $this->ion_auth->in_group('kabag') && $r->cuti!=5) { ?>
                    <a href="<?=site_url('admin/approval_cuti/setuju/'.$r->a_id)?>" class="fa fa-check-circle fa-2x"
                      style="color:green"></a>
                    <a href="<?=site_url('admin/approval_cuti/tolak/'.$r->a_id)?>" class="fa fa-times-circle fa-2x"
                      style="color:red"></a>
                  <?php } ?>
                  <?php if ($r->status_sub=="1" && $r->sukses=="0" && $r->status=="4" && $this->ion_auth->in_group('wadirum') && $r->cuti!=5) { ?>
                    <a href="<?=site_url('admin/approval_cuti/setuju/'.$r->a_id)?>" class="fa fa-check-circle fa-2x"
                      style="color:green"></a>
                    <a href="<?=site_url('admin/approval_cuti/tolak/'.$r->a_id)?>" class="fa fa-times-circle fa-2x"
                      style="color:red"></a>
                  <?php } ?>

                  <?php if ($r->status_sub=="0" && $r->sukses=="0" && $r->status=="1" && $this->ion_auth->in_group('kepruang') && $r->cuti==5) { ?>
                    <a href="<?=site_url('admin/approval_cuti/setuju_izin/'.$r->a_id)?>" class="fa fa-check-circle fa-2x"
                      style="color:green"></a>
                    <a href="<?=site_url('admin/approval_cuti/tolak_izin/'.$r->a_id)?>" class="fa fa-times-circle fa-2x"
                      style="color:red"></a>
                      <?php } ?>
                </td>


              </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- Row -->

<!-- Modal -->
<div id="modalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengajuan</h4>
      </div>
      <form action="<?=site_url()?>admin/user/add" method="post">
        <div class="modal-body">
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Start Date</label>
            <div class="col-sm-9">
              <input type="date" name="sdate" class="form-control" placeholder=""
                value="<?=date('Y-m-d',strtotime("now"))?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">End Date</label>
            <div class="col-sm-9">
              <input type="date" name="edate" class="form-control" placeholder=""
                value="<?=date('Y-m-d',strtotime("now"))?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Jumlah Hari</label>
            <div class="col-sm-2">
              <input type="number" name="jumlah" min="1" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Alasan</label>
            <div class="col-sm-9">
              <textarea name="alasan" class="form-control" cols="30" rows="10"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>

  </div>
</div>

<script type="text/javascript">
  var del = (el) => {
    let $el = $(el);
    let id = $el.data("id");
    if (confirm("Anda yakin akan menghapus kelas ini?")) {
      location.href = base_url + "admin/kelas/delete/" + id;
    }
  }
</script>