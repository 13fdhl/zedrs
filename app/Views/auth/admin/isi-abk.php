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
					<td>1</td>
					<td></td>
					<td>abie putawan</td>
					<td>1231321</td>
					<td></td>
					<td><a href="" class="btn btn-success btn-lg">Isi ABK</a></td>
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