<div class="row">
  <div class="col-md-12">
    <button type="button" class="btn btn-success" style="font-size:10pt" data-toggle="modal" data-target="#modalAdd_cuti">
      Pengajuan Cuti
    </button>
    <button type="button" class="btn btn-info" style="font-size:10pt" data-toggle="modal" data-target="#modalAdd_izin">
      Pengajuan Izin
    </button><br><br>
    <!-- <?=var_dump($list)?> -->
    <!-- <?=var_dump($sub)?> -->
    <div class="panel panel-white">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
                <th style="text-align: center; width: 5px;">No</th>
                <th style="text-align: center; width: 200px;">Periode</th>
                <th style="text-align: center; width: 200px;">Jenis Cuti</th>
                <th style="text-align: center; width: 50px;">Perihal</th>
                <th style="text-align: center; width: 300px;">Deskripsi</th>
                <th style="text-align: center; width: 100px;">Pengganti</th>
                <th style="text-align: center; width: 300px;">File</th>
                <th style="text-align: center; width: 100px;">Status</th>
                <th style="text-align: center; width: 100px;">Approval</th>
                <th style="text-align: center; width: 100px;">Aksi</th>
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
                <!-- <?= var_dump($r->cuti)?> -->
                <td style="text-align: center;"><?=$no;?></td>
                <td style="text-align: center;"><?=$r->sdate?> sampai <?=$r->edate?></td>
                <td style="text-align: center;"><b><?php if($r->cuti==1){echo'Cuti Tahunan';}if($r->cuti==2){echo'Cuti Sakit';}if($r->cuti==3){echo'Cuti Alasan Penting';}if($r->cuti==4){echo'Cuti Melahirkan';}if($r->cuti==5){echo'Izin';}?></b></td>
                <td style="text-align: center;"><b><?php if($r->perihal==1){echo'Keluarga Sakit Keras / Meninggal';}if($r->perihal==2){echo'Istri Melahirkan';}if($r->perihal==3){echo'Melaksanakan Ibadah';}if($r->perihal==4){echo'Melangsungkan Pernikahan';}?></b></td>
                <td style="text-align: center;"><?=$r->alasan?></td>
                <td style="text-align: center;"><?php 
                                                      $nsub=$r->user_id_sub;
                                                      $teman = $this->ion_auth->user($nsub)->row();;
                                                      echo $teman->first_name ?? "Tanpa Pengganti";
                                                ?>
                </td>
                <td style="text-align: center;">
                <?php if($r->file_bukti==true) :?> 
                File Cuti : <a download href="" class="fa fa-download" style="margin-bottom: 2px">Download</a>
                <?php endif; ?>
                <br>
                <?php if($r->file_bukti==true) :?> 
                File Bukti : <a download href="" class="fa fa-download" style="margin-bottom: 2px">Download</a>
                <?php endif; ?>
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
               <br><br>
                  <?php if($r->status_sub=="0" && $r->user_id_sub !="0") : ?>
                  <button type="button" class="btn btn-warning" style="color: black;">Pending Pengganti</button>
                  <?php elseif($r->status_sub=="1" && $r->user_id_sub !="0") : ?>
                  <button type="button" class="btn btn-success">Approved Pengganti</button>

                  <?php elseif($r->status_sub=="-1" && $r->user_id_sub !="0") : ?>
                  <button type="button" class="btn btn-danger">Rejected pengganti</button>
                  <?php endif; ?>
                </td>
                
                <td style="text-align: center;">
                <?php if($r->status_admin==0 && $r->status_sub !="-1") : ?>
                  <a href="<?=site_url('admin/approval_cuti_admin/setuju/'.$r->a_id)?>"
                    class="fa fa-check-circle fa-2x" style="color:green"></a>
                  <a href="<?=site_url('admin/approval_cuti_admin/tolak/'.$r->a_id)?>" class="fa fa-times-circle fa-2x"
                    style="color:red"></a>
                <?php endif; ?>
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

<!-- Modal Cuti -->
<div id="modalAdd_cuti" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengajuan Cuti</h4>
      </div>
      <form action="<?=site_url()?>admin/pengajuan_cuti/add_cuti" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label" required></label>
            <div class="col-sm-4 ">
              <select name="cuti" id="cuti">
                <option value="" disabled selected>Pilih Jenis Cuti</option>
                <option value="1">Cuti Tahunan</option>
                <option value="2">Cuti Sakit</option>
                <option value="3">Cuti Alasan Penting</option>
                <option value="4">Cuti Melahirkan</option>
              </select>
            </div>
          </div>
          <div class="form-group row select-default-hidden select-3-shown">
            <label for="" class="col-sm-3 col-form-label">Perihal</label>
            <div class="col-sm-4 ">
              <select name="perihal" id="">
                <option value="1">Keluarga Sakit Keras/Meninggal</option>
                <option value="2">Istri Melahirkan</option>
                <option value="3">Melaksanakan Ibadah</option>
                <option value="4">Melangsungkan Pernikahan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Start Date</label>
            <div class="col-sm-4 select-default-hidden select-1-shown" >
              <input type="date" name="sdate" class="form-control" min="<?=date('Y-m-d',strtotime("+1 Month"))?>" placeholder=""
                value="<?=date('Y-m-d',strtotime("+1 Month"))?>" >
            </div>
            <div class="col-sm-4 select-default-hidden select-1-shown" >
              <label for="sdate">Minimal 1 bulan sebelum</label>
            </div>
            <div class="col-sm-4 select-default-hidden select-1-hidden select-2-shown select-3-shown select-4-shown" >
              <input type="date" name="sdate" class="form-control"  placeholder=""
                value="<?=date('Y-m-d',strtotime("now"))?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">End Date</label>
            <div class="col-sm-4 select-default-hidden select-1-shown" >
              <input type="date" name="edate" class="form-control" min="<?=date('Y-m-d',strtotime("+1 Month"))?>" placeholder=""
                value="<?=date('Y-m-d',strtotime("+1 Month"))?>" >
            </div>
            <div class="col-sm-4 select-default-hidden select-1-hidden select-2-shown select-3-shown select-4-shown"  >
              <input type="date" name="edate" class="form-control" placeholder=""
                value="<?=date('Y-m-d',strtotime("now"))?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Jumlah Hari Kerja</label>
            <div class="col-sm-2 select-default-hidden select-1-shown select-2-shown select-3-shown select-4-shown">
              <input type="number" min="0" max="12" id="jumlah_hari" required name="jumlah_hari" class="form-control">
            </div>
            <div class="col-sm-4 select-default-hidden select-1-shown" >
              <label for="sdate">kuota sisa <?=$kuota_cuti?></label>
            </div>
          </div>
          <div class="form-group row">
            <label for="pengganti" class="col-sm-3 col-form-label">Pengganti</label>
            <div class="col-sm-9 select-default-hidden select-1-shown select-2-shown select-3-shown select-4-shown">
              <select name="pengganti" required id="penganti">
              <option value="" selected disabled>Pilih Pengganti</option>
                <?php foreach ($sub as $t):
                  if ($t->user_id==$user_id) {
                    continue;
                  }?>
                <option value="<?=$t->user_id?>"><?=$t->first_name?></option>
                <?php endforeach; ?>
                <option value="0">Tanpa Pengganti</option>
              </select>
            </div>
          </div>
          <div class="form-group row select-default-hidden select-1-hidden select-2-shown select-3-shown select-4-shown">
            <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <input type="text" name="alasan" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row ">
            <label for="" class="col-sm-3 col-form-label select-default-hidden select-1-shown select-2-shown select-3-shown select-4-shown">Upload File Cuti</label>
            <div class="col-sm-9 select-default-hidden select-1-shown select-2-shown select-3-shown select-4-shown">
              <input type="file" name="file_cuti" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row select-default-hidden select-1-hidden select-2-shown select-3-shown select-4-shown">
            <label for="" class="col-sm-3 col-form-olabel">Upload File Bukti Lampiran</label>
            <div class="col-sm-9 select-default-hidden select-1-hidden select-2-shown select-3-shown select-4-shown">
              <input type="file" name="file_bukti" class="form-control" placeholder="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="kuota" value="<?=$kuota_cuti?>">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal izin -->
<div id="modalAdd_izin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengajuan izin</h4>
      </div>
      <form action="<?=site_url()?>admin/pengajuan_cuti/add_izin" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-4 ">
              <input type="text" value="5" name="cuti" hidden>
            </div>
          </div>
          <div class="form-group row select-default-hidden select-3-shown">
            <label for="" class="col-sm-3 col-form-label">Perihal</label>
            <div class="col-sm-4 ">
              <select name="perihal" id="">
                <option value="5">Tidak Mengikuti Apel Pagi</option>
                <option value="6">Terlambat Masuk Kerja</option>
                <option value="7">Tidak Masuk Kerja</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Start Date</label>
            <div class="col-sm-4" >
              <input type="date" name="sdate" class="form-control" placeholder=""
                value="<?=date('Y-m-d',strtotime("now"))?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">End Date</label>
            <div class="col-sm-4" >
              <input type="date" name="edate" class="form-control" placeholder=""
                value="<?=date('Y-m-d',strtotime("now"))?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Jumlah Hari Kerja</label>
            <div class="col-sm-2">
              <input type="number" min="1" max="2" id="jumlah_hari" name="jumlah_hari" class="form-control  ">
            </div>
            <div class="col-sm-2">
              <label for="hari"></label>max 2 hari</div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
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
  $(document).ready(function () {
    $('.check').click(function () {
      $('.check').not(this).prop('checked', false);
    });
  });

  $('#cuti').change(function() {
    $('.select-default-hidden').hide();
    $('.select-default-shown').show();

    $('.select-' + $(this).val() + '-shown').show();
    $('.select-' + $(this).val() + '-hidden').hide();
}).change();
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