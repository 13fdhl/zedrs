<div class="row">
	<div class="col-md-12">
	<?php if(!$this->ion_auth->is_admin()): ?>
		<button type="button" class="btn btn-success" style="font-size:10pt" data-toggle="modal"
			data-target="#modalAdd">
			Pengajuan Perpanjang Kontrak
		</button>
		<?php endif; ?>
		<!-- <a href="<?=site_url('admin/phpspreadsheet')?>" class="btn btn-info" style="margin-bottom: 2px">Upload file
			gaji</a> <br> -->
		<br><br>
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
								<th>Perpanjang Sampai</th>
								<th>Tgl Pengajuan</th>
								<th>File rekomendasi</th>
								<th></th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					$user = $this->ion_auth->user()->row();
					foreach($list as $r):
					$no++;
					?>
							<tr>
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<td><?=$r->jabatan?></td>
								<td><?= date("j F, Y",strtotime($r->tgl_lahir)) ?></td>
								<td><?=date("j F, Y",strtotime($r->habis))?></td>
								<td><?=date("j F, Y",strtotime($r->created_at))?></td>
								<td>
								<?php if($r->file != null):?>
                            <a href="<?php echo base_url().'file_upload/kontrak/pengajuan/'.$r->file;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/kontrak/pengajuan/'.$r->file;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <?php endif;?>	
								</td>
								<td>
								<?php if($this->ion_auth->is_admin()): ?>
									<a href="<?=site_url('admin/kontrak_approval/approve/'.$r->id)?>"
										class="btn btn-info" style="margin-bottom: 2px">Approve</a> <br>
									<button type="button" class="btn btn-danger" onclick="del(this)" data-id="<?=$r->id?>">Hapus</button>
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
				<h4 class="modal-title">Pengajuan Perpanjang Kontrak</h4>
			</div>
			<form action="<?=site_url()?>admin/kontrak_pengajuan/add/<?=$user->id?>" method="post"
				enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Tanggal</label>
						<div class="col-sm-9">
							<input type="date" name="habis" class="form-control title" required autocomplete="off"
							value="<?=date('Y-m-d',strtotime("+1 Year"))?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Upload File Penilaian</label>
						<div class="col-sm-9">
						<input id="doc" name="doc" type="file">
							<small><b>tipe : pdf, max : 2 MB</b></small>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-success">Simpan</button>
					</div>
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
			location.href = base_url + "admin/kontrak/delete/" + id1;
		}
	}
</script>