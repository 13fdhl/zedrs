<div class="row">
	<div class="col-md-12">
	<button class="btn btn-primary" style="font-size:10pt" data-toggle="modal" data-target="#myModal">
      Upload List Mutasi
    </button><br><br>
		<!-- <a href="<?=site_url('admin/phpspreadsheet')?>" class="btn btn-info" style="margin-bottom: 2px">Upload file
			gaji</a> <br> -->
	
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
								<th>Instalasi</th>
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
					$no++;
					?>
							<tr>
							<form action="<?=site_url()?>admin/mutasi/update/<?=$r->id?>" method="post">
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->first_name?></td>
								<td><?=$r->username?></td>
								<td><input type="text" value="<?=$r->jabatan?>" class="form-control" name="jabatan"></td>
								<td><input type="text" value="<?=$r->instalasi?>" class="form-control" name="instalasi"></td>

								<td><button type="submit" class="btn btn-success">Mutasi</button></td>

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
	var del = (el) => {
		let $el = $(el);
		let id = $el.data("id");
		if (confirm("Anda yakin akan menghapus kelas ini?")) {
			location.href = base_url + "admin/user/delete/" + id1;
		}
	}
</script>