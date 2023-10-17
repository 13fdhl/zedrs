<div class="row">
  <div class="col-md-12">
    <div class="panel panel-white">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
            <thead>
              <tr>
               	<th>No.</th>
				<th>Foto</th>
				<th>Nama</th>
				<th>No. Pegawai</th>
				<th>Golru</th>
				<th>Jabatan</th>
				<th>Tingkat Pendidikan</th>
				<th>Nama Pendidikan</th>
				<th>Masa Habis STR</th>
				<th>Masa Habis SIP</th>
				<th> </th>
              </tr>
            </thead>
              <tbody>
              <?php
                $no=0;
                foreach ($search_result as $r):
                $no++;
              ?>
                <tr>
                 	<td><?=$no?></td>
						<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
						<td><?=$r->nama?></td>
						<td><?=$r->nip?></td>
						<td><?=$r->golru?></td>
						<td><?=$r->jf_khusus?></td>
						<td style="text-align:center"><?=$r->tingkat_pendidikan?></td>
						<td><?=$r->nama_pendidikan?></td>
						<td style="text-align:center"><?=$r->habis_str?></td>
						<td style="text-align:center"><?=$r->tgl_sip?></td>
						<!--<td>-->
						<!--	<a href="<?=site_url('admin/karyawan/detail/'.$r->id)?>" class="btn btn-primary"-->
						<!--		style="margin-bottom: 2px">Lihat</a> <br>-->
						<!--</td>-->
                </tr>
              <?php endforeach; ?>
              </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- Row -->