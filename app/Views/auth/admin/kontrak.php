<div class="row">
	<div class="col-md-12">
		<!-- <button type="button" class="btn btn-success" style="font-size:10pt" data-toggle="modal"
			data-target="#modalAdd">
			Tambah Kontrak
		</button><br><br> -->
		<!-- <?=var_dump($list)?> -->
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
						<thead class="bg-dark text-white">
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Name</th>
								<th>No. Pegawai</th>
								<th>Jabatan</th>
								<th>Tgl Lahir</th>
								<th>Berakhir</th>
								<th style="text-align: center;">Status Kontrak</th>
								<th style="">File Rekomendasi</th>
								<th style="width: 20%;">File Kontrak</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					
					foreach($list as $r):
					$hari_ini = new DateTime('today');
					$kontrak = new DateTime($r->habis);	
					// if ($kontrak < new DateTime('-1 month')) {
					// 	continue;
					// };
					$no++;
					?>
							<tr>
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<td><?=$r->jabatan?></td>
								<td><?=$r->tgl_lahir?></td>
								<td><?=$r->habis?></td>
								<td style="text-align: center;"><?php
								
								if ($kontrak >  new DateTime('+1 week')) { ?>
									<button type="button" class="btn btn-success">Aktif</button>
									<?php }elseif ($kontrak < new DateTime('today')) { ?>
									<button type="button" class="btn"
										style=" background-color: maroon; color: white">Habis</button>
									<?php }else { ?>
									<button type="button" class="btn btn-warning">Hampir Habis</button>
									<?php }; ?></td>
								<td>
								<a href="<?php echo base_url().'file_upload/kontrak/pengajuan/'.$r->file;?>"
										target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
									&nbsp;
									<a download
										href="<?php echo base_url().'file_upload/kontrak/pengajuan/'.$r->file;?>"
										class="fa fa-download" style="margin-bottom: 2px">Download</a>		
								</td>
								<td>
									<?php if($r->kontrak != null):?>
									<a href="<?php echo base_url().'file_upload/kontrak/'.$r->kontrak;?>"
										target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
									&nbsp;
									<a download
										href="<?php echo base_url().'file_upload/kontrak/'.$r->kontrak;?>"
										class="fa fa-download" style="margin-bottom: 2px">Download</a>
									<?php else :?>
									<form action="<?=site_url()?>admin/kontrak/add_kontrak" method="post"
										enctype="multipart/form-data">

										<div class="form-group">
												<input type="file" accept="application/pdf" name="kontrak" class="form-control">
												<!-- <input type="file" id="selectedFile" name="kontrak" /> -->
												
												<small>tipe : pdf</small>
										</div>

										<div class="footer">
											<input type="hidden" name="user_id" value="<?=$r->user_id?>">
											<input type="hidden" name="habis" value="<?=$r->habis?>">
											<input type="hidden" name="k_id" value="<?=$r->k_id?>">
											<button type="submit" class="btn" style="background-color: black;color:white">Upload</button>
										</div>
									</form>
									<?php endif; ?>
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
<div id="modalAdd" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Karyawan</h4>
			</div>
			<form action="<?=site_url()?>admin/kontrak/add" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Full Name</label>
						<div class="col-sm-9">
							<select class="form-control" name="name" id="name">
								<?php
							foreach($users as $k):
								if($k->user_id==$user_id){
									continue;
								}
							?>

								<option value=<?=$k->user_id?>><?=$k->first_name?></option>

								<?php
								endforeach;
							?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Tanggal Habis</label>
						<div class="col-sm-9">
							<!-- <input type="file" name="kontrak" class="form-control" id="" placeholder="max 2 MB" value="max 2MB"> -->
							<input type="date" name="habis" />
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Kontrak Pegawai</label>
						<div class="col-sm-9">
							<!-- <input type="file" name="kontrak" class="form-control" id="" placeholder="max 2 MB" value="max 2MB"> -->
							<input type="file" id="selectedFile" name="kontrak" style="display: none;" />
							<input type="button" value="Pilih File (Max 2MB)"
								onclick="document.getElementById('selectedFile').click();" />
							<br>
							<small>tipe : pdf</small>
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
		if (confirm("Anda yakin akan menghapus kelas ini?")) {
			location.href = base_url + "admin/user/delete/" + id1;
		}
	}
</script>