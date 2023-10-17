<div class="row">
	<div class="col-md-12">
		<br><br>
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
						<thead class="bg-dark text-white">
							<tr>
								<th style="width: 5%;">No.</th>
								<th>Photo</th>
								<th>Name</th>
								<th>No. Pegawai</th>
								<th>Jabatan</th>
								<th>Pangkat</th>
								<th>Kelompok</th>
								<th>Ubah</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					foreach($users as $r):
						if ($r->first_name=="Admin") {
							continue;
						}
					
					$no++;
					?>
							<tr>
								<?php $user_groups = $this->ion_auth->get_users_groups($r->id)->row();?>
								<!-- <td><?=var_dump()?></td> -->
								<!-- <td><?=$r->id?></td> -->
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<td><?=$r->jabatan?></td>
								<td><?=$r->description?></td>
								<td><?=$r->nama_kelompok?></td>
								<td style="text-align: center;">
								<form action="<?=site_url()?>admin/cuti/ubah/<?=$r->id?>" method="post">
								
									<select required name="pangkat" id="">
										<option selected disabled hidden value="<?=$user_groups->id ?? null?>">Pilih Pangkat</option>
										<option value="4">Bawahan</option>
										<option value="5">Kepala Ruang</option>
									
									</select>
									<br>							
									<select required name="kelompok" id="">
										<option selected disabled value="<?=$r->nama_kelompok?>">Pilih Kelompok</option>
										<?php foreach ($kel as $k):
											if ($k->nama_kelompok=='admin') {
												continue;
											}
											?>
										<option value="<?=$k->nama_kelompok?>"><?=$k->nama_kelompok?></option>
										<?php endforeach; ?>
									</select>
									<br>
									<button type="submit" class="fa fa-check btn-info" style="width :100px"></button></td>
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


<script type="text/javascript">
	var del = (el) => {
		let $el = $(el);
		let id = $el.data("id");
		if (confirm("Anda yakin akan menghapus kelas ini?")) {
			location.href = base_url + "admin/user/delete/" + id1;
		}
	}
</script>