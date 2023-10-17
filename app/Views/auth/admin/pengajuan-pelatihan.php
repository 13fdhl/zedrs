<div class="row">
  <div class="col-md-12">
  <button type="button" class="btn btn-primary" style="font-size:10pt" data-toggle="modal" data-target="#modalAdd1">
      Tambah Izin Pelatihan
  </button><br><br>
    <div class="panel panel-white">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
                <th style="text-align: center; width: 5px;">No</th>
                <th style="text-align: center; width: 200px;">Periode</th>
                <th style="text-align: center; width: 50px;">Perihal</th>
                <th style="text-align: center; width: 300px;">Alasan</th>
                <th style="text-align: center; width: 100px;">Status</th>
                <th style="text-align: center; width: 100px;">Approval Atasan</th>
                <th style="text-align: center; width: 100px;">Approval Pengganti</th>
              </tr>
            </thead>
              <tbody>
              <?php
                $no=0;
                foreach ($list as $r):
                  if($r->user_id!=$user_id){
                    continue;
                  }
                $no++;
              ?>
                <tr>
                  <td style="text-align: center;"><?=$no;?></td>
                  <td style="text-align: center;"><?=$r->sdate?> sampai <?=$r->edate?></td>
                  <td style="text-align: center;"><b><?=$r->perihal?></b></td>
                  <td style="text-align: center;"><?=$r->alasan?></td>
                  <td style="text-align: center;"><?php if(($r->status=="0"&&$r->status_sub!="2")||($r->status!="2"&&$r->status_sub=="0")) { ?>
                                                    <button type="button" class="btn btn-warning">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status=="1" && $r->status_sub=="1") { ?>
                                                    <button type="button" class="btn btn-success">SUKSES</button>

                                                  <?php } ?><?php if($r->status=="2" or $r->status_sub=="-1") { ?>
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
                  <td style="text-align: center;"><?php if($r->status_sub=="0" && $r->perihal=="Cuti") { ?>
                                                    <button type="button" class="btn btn-warning">Pending</button>
                                                  <?php } ?>

                                                  <?php if($r->status_sub=="1" && $r->perihal=="Cuti") { ?>
                                                    <button type="button" class="btn btn-success">Approved</button>

                                                  <?php } ?><?php if($r->status_sub=="-1" && $r->perihal=="Cuti") { ?>
                                                    <button type="button" class="btn btn-danger">Rejected</button>
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
<div id="modalAdd1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengajuan Pelatihan</h4>
      </div>
      <form action="<?=site_url()?>admin/pengajuan_pelatihan/add" method="post">
        <div class="modal-body">
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Perihal</label>
            <div class="col-sm-9">
              &nbsp;
              <!-- <input type="radio" id="Cuti" name="perihal"  value="Cuti" class="form-control">
              <label for="cuti">Cuti</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <input type="hidden" id="Pleatihan" name="perihal" checked="checked" value="Pelatihan" class="form-control">
              <label for="Pelatihan">Pelatihan</label>
            </div>
          </div>
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
            <label for="" class="col-sm-3 col-form-label">Alasan</label>
            <div class="col-sm-9">
              <input type="text" name="alasan" class="form-control" placeholder="">
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
 $(document).ready(function(){
    $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
    });
});
</script>

<!-- <script type="text/javascript">
  var del = (el) => {
    let $el = $(el);
    let id = $el.data("id");
    if(confirm("Anda yakin akan menghapus kelas ini?")){
      location.href = base_url+"admin/kelas/delete/"+id;
    }
  }
</script> -->
