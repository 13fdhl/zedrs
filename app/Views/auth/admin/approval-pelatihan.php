<div class="row">
  <div class="col-md-12">
      <div class="panel panel-white">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
                <th style="width: 30px; text-align: center;">No</th>
                <th style="text-align: center;">Nama Pegawai</th>
                <th style="text-align: center;">Profesi</th>
                <th style="text-align: center;">Bagian/Unit</th>
                <th style="text-align: center;">Nama Pelatihan</th>
                <th style="text-align: center;">Jenis Pelatihan</th>
                <th style="text-align: center;">Akhir Pendaftaran</th>
                <th style="text-align: center;">Tindakan</th>
                <th style="text-align: center; width: 100px;">Status</th>

              </tr>
              <!-- <?= var_dump($list)?> -->
            </thead>
              <tbody>
              <?php
              $no=0;
               foreach($list as $r):
                $no++;
              ?>
                <tr>
                  <td style="text-align: center;"><?=$no;?></td>
                  <td style="text-align: center;"><?=$r->nama_pegawai?></td>
                  <td style="text-align: center;"><?=$r->profesi?></td>
                  <td style="text-align: center;"><?=$r->unit?></td> 
                  <td style="text-align: center;"><?=$r->nama_pelatihan?></td>
                  <td style="text-align: center;"><?=$r->jenis_pelatihan?></td>
                  <td style="text-align: center;"><?=date('j F Y',strtotime(($r->expired)))?></td>
                  <td style="text-align: center;">
                       <a href="<?=site_url('admin/approval_pelatihan/setuju/'.$r->id)?>" class="fa fa-check-circle fa-2x" style="color:green"></a>
                       <a href="<?=site_url('admin/approval_pelatihan/tolak/'.$r->id)?>" class="fa fa-times-circle fa-2x" style="color:red"></a>
                  </td>
                  <td style="text-align: center;">
                    <?php if($r->status=="0") : ?>
                    <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                    <?php elseif($r->status=="1") : ?>
                    <button type="button" class="btn btn-success">Approved</button>
                    <?php elseif($r->status=="-1") : ?>
                    <button type="button" class="btn btn-danger">Rejected</button>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach;?>
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
