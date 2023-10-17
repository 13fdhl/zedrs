<div class="row">
  <div class="col-md-12">
    <div class="panel panel-white">
      <div class="panel-body">
        <a href="<?=site_url()?>admin/rekrutmen/add" class="btn btn-success btn-lg">Tambah Job Posting</a>
        <hr>
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
                <th style="width: 30px; text-align: center;">No</th>
                <th style="text-align: center;">jabatan</th>
                <th style="text-align: center;">deskripsi Singkat</th>
                <th style="text-align: center;">Tanggal Terakhir</th>
                <th style="text-align: center;"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                foreach ($list as $r):
                $no++;
              ?>
                <tr>
                  <td style="text-align: center;"><?=$no;?></td>
                  <td style="text-align: center;"><?=$r->job_jabatan?></td>
                  <td style="text-align: center;"><?=$r->job_sdesc?></td>
                  <td style="text-align: center;"><?=$r->job_deadline?></td>
                 
                  <td style="text-align: center;"><a href="<?=site_url('admin/rekrutmen/edit/'.$r->id)?>" class="btn btn-info">Edit</a>
                                                  <a href="<?=site_url('admin/rekrutmen/delete/'.$r->id)?>" class="btn btn-danger">Hapus</a></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- Row -->

 