<div class="row">
  <div class="col-md-12">
    <button type="button" class="btn btn-success" style="font-size:10pt" data-toggle="modal" data-target="#modalAdd">
      Tambah Karyawan
    </button><br><br>
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
						<th>Kontak</th>
						<th>status</th>
						<th>Tindakan</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$no=0;
					foreach($users as $r):
					$no++;
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$r->photo?></td>
						<td><?=$r->first_name?></td>
						<td><?=$r->email?></td>
						<td><?=$r->jabatan?></td>
						<td><?=$r->kontak?></td>
						<td><?=$r->status?></td>
						<td>
                    <a href="<?=site_url('admin/user/detail/'.$r->id)?>" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a> <br> 
                    <?php if($this->ion_auth->is_admin()): ?>
					<a href="<?=site_url('admin/user/delete/'.$r->id)?>" class="btn btn-danger" style="margin-bottom: 2px">Hapus</a> <br> 
                    <!-- <button type="button" class="btn btn-danger" onclick="del(this)" data-id="<?=$r->id?>">Hapus</button> -->
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
      <form action="<?=site_url()?>admin/user/add" method="post">
        <div class="modal-body">
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Full Name</label>
					<div class="col-sm-9">
						<input type="text" name="username" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">No. Pegawai</label>
					<div class="col-sm-9">
						<input type="text" name="email" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="text" name="password" class="form-control" placeholder="">
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
    if(confirm("Anda yakin akan menghapus kelas ini?")){
      location.href = base_url+"admin/user/delete/"+id1;
    }
  }
</script>