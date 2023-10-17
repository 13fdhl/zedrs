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
                <th style="width: 50px; text-align:center;">Perihal</th>
                <th style="width: 350px; text-align: center;">Deskripsi</th>
                <th style="width: 350px; text-align: center;">Pengganti</th>
                <th style="width: 350px; text-align: center;">File</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center; width: 100px;">Approval Atasan</th>
                <!-- <th style="text-align: center; width: 100px;">Approval Pengganti</th> -->


              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                // var_dump($list);
                foreach ($list as $r): 
                $no++;
              ?>
              <tr>
                <td style="text-align: center;"><?=$no;?></td>
                <td style="text-align: center;"><?=$r->first_name?></td>
                <td style="text-align: center;"><?=$r->username?></td>
                <td style="text-align: center;"><?=$r->sdate?><br> sampai <br><?=$r->edate?></td>
                <td style="text-align: center;"><?=$r->perihal?></td>
                <td style="text-align: center;"><?=$r->alasan?></td>
                <td style="text-align: center;"><?php 
                                                      $nsub=$r->user_id_sub;
                                                      $teman = $this->ion_auth->user($nsub)->row();;
                                                      echo $teman->first_name ?? 'Tidak Ada Pengganti';
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

<script type="text/javascript">
  var del = (el) => {
    let $el = $(el);
    let id = $el.data("id");
    if (confirm("Anda yakin akan menghapus kelas ini?")) {
      location.href = base_url + "admin/kelas/delete/" + id;
    }
  }
</script>