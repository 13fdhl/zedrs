<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-success" style="font-size:10pt" data-toggle="modal"
			data-target="#modalAdd">
			Tambah Bagian
		</button>
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
								<th>Nama Bagian</th>
								<th>Deskripsi</th>
								<th>Tindakan</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					foreach($kelompok as $r):
						// if ($r->kel=="0") {
						// 	continue;
						// };

					$no++;
					?>
							<tr>
								<td><?=$no?></td>
								<td><?=$r->nama_kelompok?></td>
								<td><?=$r->deskripsi?></td>
								<td>
									<a href="<?=site_url('admin/bagian/delete/'.$r->id)?>"
										class="btn btn-danger" style="margin-bottom: 2px">Hapus</a> <br>
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
			<form action="<?=site_url()?>admin/bagian/add" method="post">
				<div class="modal-body">
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Nama Bagian</label>
						<div class="col-sm-9">
						<input type="text" name="nama_kelompok" class="form-control">
						</div>
					</div>	
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
						<input type="text" name="deskripsi" class="form-control">
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