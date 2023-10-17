<div class="row">
	<div class="col-md-12">
	<a href="<?=site_url('admin/phpspreadsheet_pelamar')?>" class="btn btn-info"
										style="margin-bottom: 2px">Upload List Pelamar</a> <br>
		<br><br>
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
						<thead class="bg-dark text-white">
							<tr>
								<th>No.</th>
								<th>foto</th>
								<th>Nama</th>
								<th>Jabatan yg Dilamar</th>
								<th>Kontak</th>
								<th>Lolos</th>
								<th>Tindakan</th>

							</tr>
						</thead>
						<tbody>
							<?php
					$no=0;
					foreach ($list as $r):
					$no++;
				  ?>
							<tr>
								<td><?=$no?></td>
								<td><img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="50"
										height="auto"></td>
								<td><?=$r->nama?></td>
								<td><?=$r->jabatan?></td>
								<td><?=$r->phone?></td>
								<td><a href="<?=site_url('admin/pelamar/setuju/'.$r->id)?>" class="fa fa-check-circle fa-2x" style="color:green"></a></td>
								<td>
									<button type="button" class="btn btn-primary" style="font-size:10pt"
										data-toggle="modal" data-target="#modalAdd<?=$r->id?>">Lihat</button>
									<button type="button" class="btn btn-danger" onclick="del(this)"
										data-id="<?=$r->id?>">Hapus</button>
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

<!-- Modal -->
<?php foreach ($list as $r):?>

<div id="modalAdd<?=$r->id?>" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form>
				<div class="modal-body">
					<div class="form-group row">
						<!-- <label for="" class="col-sm-3 col-form-label">Name</label> -->
						<div class="col-sm-9">
							<img src="<?php echo site_url('file_upload/photo/'.$r->photo) ?>" alt="" width="100	"
								height="auto">
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Name</label>
						<div class="col-sm-9">
							<p><?=$r->nama?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<p><?=$r->alamat?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Kontak</label>
						<div class="col-sm-9">
							<p><?=$r->phone?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Tgl. Lahir</label>
						<div class="col-sm-9">
							<p><?=$r->tgl_lahir?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<p><?=($r->gender=='l')?'Laki-laki':'Perempuan'?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-9">
							<p><?=$r->nik?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">CV</label>
						<div class="col-sm-9">
							<a href="<?=base_url()?>ViewerJS/#../file_upload/cv/<?=$r->cv?>"
							target="_blank"	class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
							<a download href="http://localhost/hris/file_upload/cv/<?=$r->cv?>" class="fa fa-download"
								style="margin-bottom: 2px">download</a>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Ijazah</label>
						<div class="col-sm-9">
							<a href="<?=base_url()?>ViewerJS/#../file_upload/ijazah/<?=$r->ijazah?>"
							target="_blank"	class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
							<a download href="http://localhost/hris/file_upload/ijazah/<?=$r->ijazah?>" class="fa fa-download"
								style="margin-bottom: 2px">download</a>
						</div>
					</div>
					<?php if($r->sertifikat1 != "") { ?>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Sertifikat 1</label>
						<div class="col-sm-9">
							<a href="<?=base_url()?>ViewerJS/#../file_upload/sertifikat/<?=$r->sertifikat1?>"
							target="_blank"	class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
							<a download href="http://localhost/hris/file_upload/sertifikat/<?=$r->sertifikat1?>" class="fa fa-download"
								style="margin-bottom: 2px">download</a>
						</div>
					</div>
					<?php }; ?>

					<?php if($r->sertifikat2 != "") { ?>
					<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Sertifikat 2</label>
						<div class="col-sm-9">
							<a href="<?=base_url()?>ViewerJS/#../file_upload/sertifikat/<?=$r->sertifikat2?>"
							target="_blank"	class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
							<a download href="http://localhost/hris/file_upload/sertifikat/<?=$r->sertifikat2?>" class="fa fa-download"
								style="margin-bottom: 2px">download</a>
						</div>
					</div>
					<?php }; ?>
					<!-- <div>
						<iframe src="<?=base_url()?>ViewerJS/#../file_upload/cv/<?=$r->cv?>" allowfullscreen webkitallowfullscreen width='850' height='250' id="viewerjs_preview"></iframe> 
					</div> -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>

<script type="text/javascript">
	var del = (el) => {
		let $el = $(el);
		let id = $el.data("id");
		if (confirm("Anda yakin akan menghapus ini?")) {
			  location.href = base_url+"admin/pelamar/delete/"+id;
		}
	}
</script>