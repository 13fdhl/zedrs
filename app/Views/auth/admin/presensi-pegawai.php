<div class="row">
	<div class="panel panel-white">
		<div class="panel-body">
			<div class="table-responsive">
				<div>
					<form action="<?=site_url('admin/presensi/pegawai/3')?>" method="get" target="_blank">
						<label for="month">Bulan:</label>
						<input style="width: 50px;"  type="number" id="month" name="month" min="1" max="12">
						<label for="year">Tahun</label>
						<input style="width: 65px;" type="number" id="year" name="year" min="2000" max="2050">
					<input type="submit" value="Lihat Presensi">
					</form>
				</div>
				<table id="data-table1" class="display table" style="width: 100%; cellspacing: 0;">
					<thead class="bg-dark text-white">
						<tr>
							<th>No.</th>
							<th>Tanggal</th>
							<th>Absen Masuk</th>
							<th>Absen Pulang</th>
							<!-- <th>Nilai</th> -->
							<th> </th>
						</tr>
					</thead>
					<tbody>
						<?php
					$no=0;
					$lastDate = null;
					foreach($presensi as $r):
					$no++;
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=date('j F,Y',strtotime($r->tgl))?></td>
						<?php
						$t1 = $r->masuk ?? 'tidak absen';
						$t2 = $r->keluar ?? 'tidak absen';
						if($t1<$t2) :?>
						<td><?=$t1?></td>
						<td><?=$t2?></td>
						<?php else:?>
						<td><?=$t2?></td>
						<td><?=$t1?></td>
						<?php endif;?>
						<!-- <td>
						<form action="<?=site_url()?>admin/presensi/nilai/<?=$r->id?>" method="post">
						<input type="number" value="<?=$r->nilai?>" name="nilai" min="0" max="100">
					</td> -->
					<!-- <td>
						<button type="submit" class="btn btn-success">Nilai</button>
					</td> -->
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


<!-- Modal -->


<script type="text/javascript">
	var del = (el) => {
		let $el = $(el);
		let id = $el.data("id");
		if (confirm("Anda yakin akan menghapus kelas ini?")) {
			location.href = base_url + "admin/user/delete/" + id1;
		}
	}

	$(document).ready(function () {
    $('#data-table1').dataTable({
      "pageLength": 20,
      "lengthMenu": [
        [20, 30, 60, 90, -1],
        [20, 30, 60, 90, "All"]
      ]
    });
  });
</script>