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
                <th style="width: 300px; text-align:center;">Jabatan</th>
                <th style="width: 350px; text-align: center;">File Peserta</th>
                <th style="width: 350px; text-align: center;">File Penilaian</th>
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
                <td style="text-align: center;"><?=$r->jabatan?></td>
                <td style="text-align: center;">
                <?php if($r->penilaian_review != null):?>
                <a href="<?php echo base_url().'file_upload/pelatihan/'.$r->penilaian_review;?>"
										target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
									&nbsp;
								<a download
										href="<?php echo base_url().'file_upload/pelatihan/'.$r->penilaian_review;?>"
										class="fa fa-download" style="margin-bottom: 2px">Download</a>		
                <?php else :?>
                  Belum Upload
                  <?php endif; ?>
								</td>
                <td style="text-align: center;">
                <?php if($r->pelatihan_hasil != null):?>
									<a href="<?php echo base_url().'file_upload/pelatihan/'.$r->pelatihan_hasil;?>"
										target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
									&nbsp;
									<a download
										href="<?php echo base_url().'file_upload/pelatihan/'.$r->pelatihan_hasil;?>"
										class="fa fa-download" style="margin-bottom: 2px">Download</a>
									<?php else :?>
									<form action="<?=site_url()?>admin/event_pelatihan/upload" method="post"
										enctype="multipart/form-data">

										<div class="form-group">
												<input type="file" name="pelatihan_hasil" class="form-control">
												<!-- <input type="file" id="selectedFile" name="kontrak" /> -->
												
												<small>tipe : pdf</small>
										</div>

										<div class="footer">
											<button type="submit" class="btn" style="background-color: black;color:white">Upload</button>
										</div>
									</form>
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