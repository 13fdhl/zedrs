<div class="row">
  <div class="col-md-12">
    <div class="panel panel-white">
      <div class="panel-body">
        <!-- <a href="<?=site_url()?>admin/event/add" class="btn btn-success btn-lg">Tambah Event</a> -->
        <hr>
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
                <th style="width: 30px; text-align: center;">No</th>
                <th style="text-align: center;">Nama Pelatihan</th>
                <th style="text-align: center;">Deskripsi Singkat</th>
                <th style="text-align: center;">expired</th>
                <th style="text-align: center;">status</th>
                <th style="text-align: center;"></th>
              </tr>
            </thead>
            <!-- <?=var_dump($list)?> -->
            <tbody>
              <?php 
              $no=0;
              foreach($list as $r):
              $no++;
              ?>
                <tr>
                  <td style="text-align: center;"><?=$no?></td>
                  <td style="text-align: center;"><?=$r->pelatihan_name?></td>
                  <td style="text-align: center;"><?=$r->pelatihan_desc?></td>
                  <td style="text-align: center;"><?=$r->expired?></td>
                  <td style="text-align: center;">
                    <?php if($r->status=="0") : ?>
                    <button type="button" class="btn btn-warning" style="color: black;">Pending</button>
                    <?php elseif($r->status=="1") : ?>
                    <button type="button" class="btn btn-success">Approved</button>
                    <?php elseif($r->statua=="-1") : ?>
                    <button type="button" class="btn btn-danger">Rejected</button>
                    <?php endif; ?>
                  </td>
                  <td style="text-align: center;">
                  <?php if($r->status == null):?>
                    <a href="<?=site_url('admin/daftar_pelatihan/daftar/'.$r->p_id)?>" class="btn btn-info">Daftar</a>
                  <?php elseif($r->status == 1 && $r->penilaian_review ==null) : ?>
                    Upload File :
                    <form action="<?=site_url()?>admin/daftar_pelatihan/add_file" method="post"
										enctype="multipart/form-data">

										<div class="form-group">
												<input type="file" accept="application/pdf" name="file" class="form-control">
												<!-- <input type="file" id="selectedFile" name="kontrak" /> -->
												
												<small>tipe : pdf</small>
										</div>

										<div class="footer">
											<input type="hidden" name="user_id" value="<?=$r->user_id?>">
											<input type="hidden" name="id" value="<?=$r->daftar_id?>">
											<button type="submit" class="btn" style="background-color: black;color:white">Upload</button>
										</div>
                    </form>
                    <?php elseif($r->status == 1 && $r->penilaian_review !=null) : ?>
                    <a href="<?php echo base_url().'file_upload/pelatihan/'.$r->penilaian_review;?>"
										target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
									&nbsp;
									<a download
										href="<?php echo base_url().'file_upload/pelatihan/'.$r->penilaian_review;?>"
										class="fa fa-download" style="margin-bottom: 2px">Download</a>

                  <?php endif;?>

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

 