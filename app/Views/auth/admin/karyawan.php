<style>

.btn-group{display:inline-block;}
.icon-trash{background-position:-456px 0;}
.icon-pencil{background-position:0 -72px;}
.icon-ok-circle{background-position:-192px -96px;}
.dropdown{position:relative;}
.dropdown-toggle{*margin-bottom:-3px;}
.dropdown-toggle:active, .dropdown-toggle{outline:0;}
.caret{display:inline-block;width:0;height:0;vertical-align:top;border-top:4px solid #000000;border-right:4px solid transparent;border-left:4px solid transparent;content:"";}



button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none;}
.btn{display:inline-block;*display:inline;*zoom:1;padding:4px 14px;margin-bottom:0;font-size:14px;line-height:20px;*line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;text-shadow:0 1px 1px rgba(255, 255, 255, 0.75);background-color:#f5f5f5;background-image:-moz-linear-gradient(top, #ffffff, #e6e6e6);background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));background-image:-webkit-linear-gradient(top, #ffffff, #e6e6e6);background-image:-o-linear-gradient(top, #ffffff, #e6e6e6);background-image:linear-gradient(to bottom, #ffffff, #e6e6e6);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);*background-color:#e6e6e6;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);border:1px solid #cccccc;*border:0;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;*margin-left:.3em;-webkit-box-shadow:inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);box-shadow:inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);}.btn:hover,.btn:active,.btn.active,.btn.disabled,.btn[disabled]{color:#333333;background-color:#e6e6e6;*background-color:#d9d9d9;}
.btn:active,.btn.active{background-color:#cccccc \9;}
.btn:first-child{*margin-left:0;}
.btn:hover{color:#333333;text-decoration:none;background-color:#e6e6e6;*background-color:#d9d9d9;background-position:0 -15px;-webkit-transition:background-position 0.1s linear;-moz-transition:background-position 0.1s linear;-o-transition:background-position 0.1s linear;transition:background-position 0.1s linear;}
.btn:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn.active,.btn:active{background-color:#e6e6e6;background-color:#d9d9d9 \9;background-image:none;outline:0;-webkit-box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);}
.btn.disabled,.btn[disabled]{cursor:default;background-color:#e6e6e6;background-image:none;opacity:0.65;filter:alpha(opacity=65);-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}

.btn-small{padding:3px 9px;font-size:12px;line-height:18px;}
.btn-small [class^="icon-"]{margin-top:0;}

button.btn.btn-small,input[type="submit"].btn.btn-small{*padding-top:3px;*padding-bottom:3px;}


.btn-group{position:relative;font-size:0;vertical-align:middle;white-space:nowrap;*margin-left:.3em;}.btn-group:first-child{*margin-left:0;}
.btn-group+.btn-group{margin-left:5px;}

.btn-group>.btn{position:relative;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.btn-group>.btn+.btn{margin-left:-1px;}
.btn-group>.btn,.btn-group>.dropdown-menu{font-size:14px;}
.btn-group>.btn-small{font-size:12px;}

.btn-group>.btn:first-child{margin-left:0;-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
.btn-group>.btn:last-child,.btn-group>.dropdown-toggle{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}

.btn-group>.btn:hover,.btn-group>.btn:focus,.btn-group>.btn:active,.btn-group>.btn.active{z-index:2;}
.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0;}
.btn-group>.btn+.dropdown-toggle{padding-left:8px;padding-right:8px;-webkit-box-shadow:inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);box-shadow:inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);*padding-top:5px;*padding-bottom:5px;}
.btn-group>.btn-small+.dropdown-toggle{*padding-top:5px;*padding-bottom:4px;}

.btn-group.open .dropdown-toggle{background-image:none;-webkit-box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);}
.btn-group.open .btn.dropdown-toggle{background-color:#e6e6e6;}
.btn-group.open .btn-primary.dropdown-toggle{background-color:#dd7a14;}
.btn-group.open .btn-warning.dropdown-toggle{background-color:#dd4814;}
.btn-group.open .btn-danger.dropdown-toggle{background-color:#bd362f;}
.btn-group.open .btn-success.dropdown-toggle{background-color:#51a351; border-radius:4px}
.btn-group.open .btn-info.dropdown-toggle{background-color:#772953;}
.btn-group.open .btn-inverse.dropdown-toggle{background-color:#222222;}
.btn .caret{margin-top:8px;margin-left:0;}
.btn-mini .caret,.btn-small .caret,.btn-large .caret{margin-top:6px;}
.caret{border-left-width:5px;border-right-width:5px;border-top-width:5px;}
.caret{border-bottom:5px solid #000000;border-top:0;}
.btn-primary .caret,.btn-warning .caret,.btn-danger .caret,.btn-info .caret,.btn-success .caret,.btn-inverse .caret{border-top-color:#ffffff;border-bottom-color:#ffffff; border-radius:4px}
.btn-group-vertical{display:inline-block;*display:inline;*zoom:1;}
.btn-group-vertical .btn{display:block;float:none;width:100%;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.btn-group-vertical .btn+.btn{margin-left:0;margin-top:-1px;}
.btn-group-vertical .btn:first-child{-webkit-border-radius:4px 4px 0 0;-moz-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0;}
.btn-group-vertical .btn:last-child{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px;}
.btn-group-vertical .btn-large:first-child{-webkit-border-radius:6px 6px 0 0;-moz-border-radius:6px 6px 0 0;border-radius:6px 6px 0 0;}
.btn-group-vertical .btn-large:last-child{-webkit-border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;border-radius:0 0 6px 6px;}

@media (max-width:979px){}
.alert{text-shadow:none;}

</style>




<div class="row">
  <div class="col-md-12">
    <button type="button" class="btn" style="font-size:10pt" data-toggle="modal" data-target="#modalAdd">
      Tambah Pegawai
    </button><br><br>
    <div class="panel panel-white">
      <div class="panel-body">
        <div class="table-responsive">
          <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
		  <thead class="bg-dark text-white">
					<tr>
							<th>No.</th>
						<!--<th>Foto</th>-->
						<th>Nama</th>
						<th>NIP</th>
						<th>Golru</th>
						<th>Jabatan</th>
						<!--<th>Tingkat Pendidikan</th>-->
						<!--<th>Nama Pendidikan</th>-->
						<th>Masa Habis STR</th>
						<th>Masa Habis SIP</th>
						<!--<th>Status</th>-->
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=0;
					foreach($users as $user):
					$no++;
					?>
					<tr>
							<td><?=$no?></td>
						<!--<td><img src="<?php echo site_url('file_upload/photo/'.$user->photo) ?>" alt="" width="50"-->
						<!--				height="auto"></td>-->
						<td><?=$user->nama?></td>
						<td><?=$user->nip?></td>
						<td><?=$user->golru?></td>
						<td><?=$user->jf_khusus?></td>
						<!--<td><?=$user->tingkat_pendidikan?></td>-->
						<!--<td><?=$user->nama_pendidikan?></td>-->
						<td><?=$user->habis_str?></td>
						<td><?=$user->tgl_sip?></td>
						<!--<td><?=($user->status_hukum=='aktif')?'Aktif':'Tidak Aktif'?></td>-->
						
						<td>
	                        <div class="btn-group">
	                            <a class="btn btn-small" href="<?=site_url('admin/karyawan/profile/'.$user->id)?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	                            <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?=site_url('admin/karyawan/detail/'.$user->id)?>"><i class="icon-pencil"></i> Edit Data</a></li>
	                                <li><a href="<?=site_url('admin/karyawan/delete_karyawan/'.$user->id)?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	                            </ul>
	                        </div><!-- /btn-group -->
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
        <h4 class="modal-title">Tambah Pegawai</h4>
      </div>
      <form action="<?=site_url()?>admin/karyawan/add" method="post">
        <div class="modal-body">
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Nomor Pegawai</label>
					<div class="col-sm-9">
						<input type="text" name="nip" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Nama</label>
					<div class="col-sm-9">
						<input type="text" name="nama" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group row">
						<label for="" class="col-sm-3 col-form-label">Status ASN</label>
						<div class="col-sm-9">
						<select name="asn" id="asn">
							<option value="asn">ASN</option>
							<option value="non">non-ASN</option>
						</select>
						</div>
					</div>
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-9">
						<input type="email" name="email" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" name="password" class="form-control" placeholder="">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Posisi</label>
					<div class="col-sm-9">
					<select name="group_id" id="">
						<option value="1">Admin</option>
						<option value="2">Atasan Langsung</option>
						<option value="3">Pegawai</option>
					</select> 
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