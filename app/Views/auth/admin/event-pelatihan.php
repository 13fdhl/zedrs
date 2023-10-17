<div class="row">
  <div class="col-md-12">
    <div class="panel panel-white">
      <div class="panel-body">
        <a href="<?=site_url()?>admin/event_pelatihan/add" class="btn btn-success btn-lg">Tambah Pelatihan</a>
        <hr>
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
                <th style="text-align: center;">Status</th>
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
                  <td style="text-align: center;"><?=$r->nama_pegawai?></td>
                  <td style="text-align: center;"><?=$r->profesi?></td>
                  <td style="text-align: center;"><?=$r->unit?></td> 
                  <td style="text-align: center;"><?=$r->nama_pelatihan?></td>
                  <td style="text-align: center;"><?=$r->jenis_pelatihan?></td>
                  <td style="text-align: center;"><?=date('j F Y',strtotime(($r->expired)))?></td>
                  <!--<td style="text-align: center;">-->
                  <!--  <?php if($r->expired >=  date('Y-m-d')) : ?>-->
                  <!--  <button type="button" class="btn btn-success">Aktif</button>-->
                  <!--  <?php else :?>-->
                  <!--  <button type="button" class="btn btn-danger">Expired</button>-->
                  <!--  <?php endif; ?>-->
                  <!--</td>-->
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
              <?php endforeach; ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- Row -->

 