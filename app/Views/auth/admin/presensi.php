<div class="row">
	<div class="col-md-12">
		<!-- <button type="button" class="btn btn-success" style="font-size:10pt" data-toggle="modal"
			data-target="#modalAdd">
			Tambah Karyawan
		</button> -->
		<button class="btn btn-primary" style="font-size:10pt" data-toggle="modal" data-target="#myModal">
      Upload Presensi
    </button><br><br>
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="data-table20" class="display table" style="width: 100%; cellspacing: 0;">
						<thead class="bg-dark text-white">
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Name</th>
								<th>No. Pegawai</th>
								<!-- <th>Presensi ID</th> -->
								<th>Jabatan</th>
								<th>Tindakan</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					foreach($users as $r):
						if ($r->id==1) {
							continue;
						}
					$no++;
					?>
							<tr>
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<!-- <td>
								<form action="<?=site_url()?>admin/presensi/update/<?=$r->id?>" method="post">
									<select name="presensi_id">
										<option disabled selected value="<?=$r->presensi_id?>">
										<?php 
										$CI =& get_instance();
										$CI->load->model('m_presensi');
										$p_u = $CI->m_presensi->get_p_user_by_id($r->presensi_id);
										?>
										<?=$p_u[0]->nama ?? ''?>
										</option>

											<?php foreach($p_user as $pu): ?>
											<option value="<?=$pu->presensi_id?>"><?=$pu->nama?></option>
											<?php endforeach; ?>
										</select>
								&nbsp;
								<button type="submit" class="btn btn-success">Tentukan</button>
								</form>
								</td> -->
								<td><?=$r->jabatan?></td>
							<td>
							<form action="<?=site_url('admin/presensi/pegawai/'.$r->presensi_id)?>" method="get" target="_blank">
								<label for="month">Bulan:</label>
								<input style="width: 50px;"  type="number" id="month" name="month" min="1" max="12">
								<label for="year">Tahun</label>
								<input style="width: 65px;" type="number" id="year" name="year" min="2000" max="2050">
								<input type="submit" value="Lihat Presensi">
								</form>
								</td>
							</tr>
							<?php
					endforeach;
					?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div><!-- Row -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pilih File Excel</h4>
      </div>
      <form action="<?=site_url()?>admin/presensi/import" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="file" name="file" required/>
        <br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">

</script>