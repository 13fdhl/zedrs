<div class="row">
	<div class="col-md-12">
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
								<!-- <th>Kontak</th> -->
								<!-- <th>Tgl Lahir</th>
								<th>Usia</th> -->
								<!-- <th style="text-align: center;">Countdown Ultah</th> -->
								<th>KPI terakhir</th>
								<th>Tindakan</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					foreach($users as $r):
						if ($r->first_name=="Admin") {
							continue;
						};
					$no++;
					?>
							<tr>
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<td><?=$r->jabatan?></td>
								<td><?=($r->submitted==null)?'Tidak ada KPI': Date("j F Y",strtotime($r->submitted));?></td>
								<td>
									<a href="<?=site_url('admin/kpi/isi/'.$r->id)?>" class="btn btn-primary"
										style="margin-bottom: 2px">Isi KPI</a> <br>
									<a href="<?=site_url('admin/kpi/list/'.$r->id)?>"
										class="btn btn-info" style="margin-bottom: 2px">list KPI</a> <br>
									<!-- <button type="button" class="btn btn-danger" onclick="del(this)" data-id="<?=$r->id?>">Hapus</button> -->
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

<script type="text/javascript">
	var del = (el) => {
		let $el = $(el);
		let id = $el.data("id");
		if (confirm("Anda yakin akan menghapus kelas ini?")) {
			location.href = base_url + "admin/user/delete/" + id1;
		}
	}
</script>