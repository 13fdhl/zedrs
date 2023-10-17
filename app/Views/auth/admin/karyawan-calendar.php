<div class="row">
	<div class="col-md-12">
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
								<th>Tindakan</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					foreach($users as $r):
						if ($r->id=="1") {
							continue;
						};
					$from = new DateTime($r->tgl_lahir);
					$to   = new DateTime('today');
					$usia = $from->diff($to)->y;
					$ultah = $from;
					$ultah->setDate($to->format('Y'), $from->format('m'), $from->format('d'));

					switch (true) {
						case ($ultah < $to) :
						$from->setDate($to->format('Y'), $from->format('m'), $from->format('d'));
						$from->modify('+1 year');
						break;
					
						case ($to < $ultah) :
						$from->setDate($to->format('Y'), $from->format('m'), $from->format('d'));
						break;
					}
					$interval = $from->diff($to);
					$diff = $interval->format('%a');

					$no++;
					?>
							<tr>
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<td><?=$r->jabatan?></td>
								<td>
									<a href="<?=site_url('admin/karyawan_calendar/calendar/'.$r->id)?>" class="btn btn-primary"
										style="margin-bottom: 2px">Lihat Kalender</a> <br>
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
			<form action="<?=site_url()?>admin/karyawan/add" method="post">
				<div class="modal-body">
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Full Name</label>
						<div class="col-sm-9">
							<select class="form-control" name="id" id="id">
								<?php
							foreach($pelamar as $k):
							?>

								<option value=<?=$k->id?>><?=$k->nama?></option>

								<?php
								endforeach;
							?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">No. Pegawai</label>
						<div class="col-sm-9">
							<input type="text" name="username" class="form-control" id="" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Divisi</label>
						<div class="col-sm-9">
							<select class="form-control" name="kel" id="">
								<option value="2">HSEO</option>
								<option value="3">SEM</option>
								<option value="4">SOM</option>
								<option value="5">SAM</option>
								<option value="6">QC</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Pangkat</label>
						<div class="col-sm-9">
							<select class="form-control" name="group_id" id="">
								<!-- <option value="1">Admin</option> -->
								<option value="2">Manajer</option>
								<option value="4">Karyawan</option>
							</select>
						</div>
					</div>
					<!-- <div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input type="password" name="password" class="form-control" placeholder="">
						</div>
					</div> -->

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