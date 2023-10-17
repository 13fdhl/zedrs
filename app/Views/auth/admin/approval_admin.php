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
                <th style="width: 400px; text-align:center;">Waktu</th>
                <th style="width: 50px; text-align:center;">Perihal</th>
                <th style="width: 350px; text-align: center;">Deskripsi</th>
                <th style="width: 350px; text-align: center;">Pengganti</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center; width: 100px;">Approval Atasan</th>
                <th style="text-align: center; width: 100px;">Approval Pengganti</th>
                <!-- <th style="text-align: center;">Tindakan</th> -->
         

              </tr>
            </thead>
              <tbody>
              <?php
                $no=0;
                // var_dump($list);
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
                  <td style="text-align: center;"><?=$r->perihal?></td>
                  <td style="text-align: center;"><?=$r->alasan?></td>
                  <td style="text-align: center;"><?php if($r->perihal=="Cuti") {
                                                    echo $r->pengganti;} ?>
                  </td>
                  
                  <?php if ($r->perihal=='Sakit'): ?>
                  <td style="text-align: center;"><?php if($r->status=="0") { ?>
                                                    <button type="button" class="btn btn-warning">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status=="1") { ?>
                                                    <button type="button" class="btn btn-success">SUKSES</button>

                                                  <?php } ?><?php if($r->status=="2"){ ?>
                                                    <button type="button" class="btn btn-danger">GAGAL</button>
                                                  <?php } ?>
                  </td>
                  <td style="text-align: center;"><?php if($r->status=="0") { ?>
                                                    <button type="button" class="btn btn-warning">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status=="1") { ?>
                                                    <button type="button" class="btn btn-success">Approved</button>

                                                  <?php } ?><?php if($r->status=="2") { ?>
                                                    <button type="button" class="btn btn-danger">Rejected</button>
                                                  <?php } ?>
                  </td>
                  <?php else:?>
                  <td style="text-align: center;"><?php if($r->status=="0") { ?>
                                                    <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status=="1") { ?>
                                                    <button type="button" class="btn btn-success">SUKSES</button>

                                                  <?php } ?><?php if($r->status=="2") { ?>
                                                    <button type="button" class="btn btn-danger">GAGAL</button>
                                                  <?php } ?>
                  </td>
                  <td style="text-align: center;"><?php if($r->status=="0" && $r->status_sub=="0") { ?>
                                                  <button type="button" class="btn" style="background-color: #e07c02; color:white;">Menunggu Pengganti</button>
                                                  <?php } ?>

                                                  <?php if($r->status=="0" && $r->status_sub=="1") { ?>
                                                  <button type="button" class="btn btn-warning" style=" color:black;">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status=="1") { ?>
                                                    <button type="button" class="btn btn-success">Approved</button>

                                                  <?php } ?><?php if($r->status=="2") { ?>
                                                    <button type="button" class="btn btn-danger">Rejected</button>
                                                  <?php } ?>
                  </td>
                  <?php endif; ?>
                  <td style="text-align: center;"><?php if($r->status_sub=="0" && $r->perihal=="Cuti") { ?>
                                                    <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status_sub=="1" && $r->perihal=="Cuti") { ?>
                                                    <button type="button" class="btn btn-success">Approved</button>

                                                  <?php } ?><?php if($r->status_sub=="-1" && $r->perihal=="Cuti") { ?>
                                                    <button type="button" class="btn btn-danger">Rejected</button>
                                                  <?php } ?>
                  </td>
                  <!-- <td style="text-align: center;"><a href="<?=site_url('admin/approval_admin/setuju/'.$r->a_id)?>" class="fa fa-check-circle fa-2x" style="color:green"></a>
                                                  <a href="<?=site_url('admin/approval_admin/tolak/'.$r->a_id)?>" class="fa fa-times-circle fa-2x" style="color:red"></a></td> -->
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
              <input type="date" name="sdate" class="form-control" placeholder="" value="<?=date('Y-m-d',strtotime("now"))?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">End Date</label>
            <div class="col-sm-9">
              <input type="date" name="edate" class="form-control" placeholder="" value="<?=date('Y-m-d',strtotime("now"))?>">
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
    if(confirm("Anda yakin akan menghapus kelas ini?")){
      location.href = base_url+"admin/kelas/delete/"+id;
    }
  }

</script>
