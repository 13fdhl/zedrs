<style>
    .table1 {border: 2px solid #22baa0;border-collapse:collapse;width:150%}
		.table1 td {background: #fff url("images/sprites.gif") repeat-x 0 -1600px;padding:3px;border: 1px solid #fff}
		.table1 th {text-align:left;border: 1px solid #fff}
		.table1 thead th {color:#fff;font-size:145%;background: #22baa0 url("images/sprites.gif") repeat-x 0 -1300px;padding: 10px 6px}
		.table1 tbody th {color:#fff;font-size:115%;background: #88b8db url("images/sprites.gif") repeat-x 0 -1400px;padding: 6px}
		.table1 tbody th.sub {font-size:100%;color:#000;background: #efefef url("images/sprites.gif") repeat-x 0 -1500px;padding: 6px}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-white">
            <div class="panel-body">

                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                        
                        <!--Menu-->
                        <div class="col-md-3 pt-0">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#profile" role="tab">
                                    <i class="fa fa-user text-lightest"></i>&nbsp; Profil</a>
                                
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#pasangan" role="tab">
                                    <i class="fa fa-user text-lightest"></i>&nbsp; Data Pasangan</a>
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#anak" role="tab">
                                    <i class="fa fa-user text-lightest"></i>&nbsp; Data Anak</a>
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#pendidikan" role="tab">
                                    <i class="fa fa-user text-lightest"></i>&nbsp; Riwayat Pendidikan</a>
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#jabatan" role="tab">
                                    <i class="fa fa-user text-lightest"></i>&nbsp; Riwayat Jabatan</a>
                                    
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#photo" role="tab"> 
                                    <i class="fa fa-photo text-lightest"></i>&nbsp; Photo</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#dokumen"> 
                                    <i class="fa fa-file text-lightest"></i>&nbsp; Dokumen</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#password"> 
                                    <i class="fa fa-key text-lightest"></i> &nbsp; Ganti Password</a>
                            </div>
                        </div>

                       <div class="col-md-9">
              <div class="tab-content">

                <div class="tab-pane active" id="profile" role="tabpanel">
                  <h3>PROFIL</h3>
                  <div class="card-body media align-items-center">
                    <div class="col-md-8">
                      <div class="panel panel-white">
                        <div class="panel-body">
                          <form action="<?=site_url()?>admin/karyawan/update_profile/<?=$profile->id?>" method="post"
                            enctype="multipart/form-data">
                              
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control title" required autocomplete="off" value="<?=$profile->nama??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">NIP</label>
                                <input type="text" name="nip" class="form-control title" required autocomplete="off" value="<?=$profile->nip??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">NIP Lama</label>
                                <input type="text" name="niplama" class="form-control title" required autocomplete="off" value="<?=$profile->nip_lama??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Kab. Lahir</label>
                                <input type="text" name="kablahir" class="form-control title" required autocomplete="off" value="<?=$profile->tempat_lahir??''?>">
                            </div>
                            
                            <div class="form-group">
                                
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" class="form-control title" required autocomplete="off" value="<?=$profile->tgl_lahir??''?>">
                               
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Jenis Kelamin</label>
                                <select class="form-control title" name="gender">
                                  <?php if ($profile->gender=="l") {?>
                                  <option hidden selected value="l">Laki-laki</option>
                                  <?php }else { ?>
                                  <option hidden selected value="p">Perempuan</option>
                                  <?php } ?>
                                  <option value="l">Laki-laki</option>
                                  <option value="p">Perempuan</option>
                                </select>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label">Agama</label>
                                <input type="text" name="agama" class="form-control title" required autocomplete="off" value="<?=$profile->agama??''?>">
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label">Status Pernikahan</label>
                                <select class="form-control title" name="pernikahan">
                                <?php if ($profile->status_pernikahan=="menikah") {?>
                                  <option hidden selected value="menikah">Menikah</option>
                                  <?php }else { ?>
                                  <option hidden selected value="belum">Belum Menikah</option>
                                  <?php } ?>
                                  <option value="menikah">Menikah</option>
                                  <option value="belum">Belum Menikah</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control title" required autocomplete="off" value="<?=$profile->alamat??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Kode Pos</label>
                                <input type="text" name="kodepos" class="form-control title" required autocomplete="off" value="<?=$profile->kode_pos??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Telepon</label>
                                <input type="text" name="telepon" class="form-control title" required autocomplete="off" value="<?=$profile->telepon??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" class="form-control title" required autocomplete="off" value="<?=$profile->email??''?>">
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Golru</label>
                                    <input type="text" name="golru" class="form-control title" required autocomplete="off" value="<?=$profile->golru??''?>">
                                </div>
                                
                                <div class="col-md-6">
                                   <label class="control-label">TMT</label>
                                    <input type="date" name="tmt" class="form-control title" required autocomplete="off" value="<?=$profile->tmt??''?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Golru CPNS</label>
                                    <input type="text" name="golrucpns" class="form-control title" required autocomplete="off" value="<?=$profile->golru_cpns??''?>">
                                </div>
                                
                                <div class="col-md-6">
                                   <label class="control-label">TMT CPNS</label>
                                    <input type="date" name="tmtcpns" class="form-control title" required autocomplete="off" value="<?=$profile->tmt_cpns??''?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Jenis Kepegawaian</label>
                                <input type="text" name="jeniskepegawaian" class="form-control title" required autocomplete="off" value="<?=$profile->jenis_kepegawaian??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Status Hukum</label>
                                 <select class="form-control title" name="statushukum">
                                <?php if ($profile->status_hukum=="aktif") {?>
                                  <option hidden selected value="aktif">Aktif</option>
                                  <?php }else { ?>
                                  <option hidden selected value="tidak">Tidak Aktif</option>
                                  <?php } ?>
                                  <option value="aktif">Aktif</option>
                                  <option value="tidak">Tidak Aktif</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">SKPD</label>
                                <input type="text" name="skpd" class="form-control title" required autocomplete="off" value="<?=$profile->skpd??''?>">
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label">Jenis Jabatan</label>
                                <input type="text" name="jenisjabatan" class="form-control title" required autocomplete="off" value="<?=$profile->jenis_jabatan??''?>">
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label">Jab. Unor/Eselon</label>
                                <input type="text" name="eselon" class="form-control title" required autocomplete="off" value="<?=$profile->eselon??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Tugas Tambahan</label>
                                <input type="text" name="tugastambahan" class="form-control title" required autocomplete="off" value="<?=$profile->tugas_tambahan??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Jab. Fungsional Khusus/Umum - AK</label>
                                <input type="text" name="jfkhusus" class="form-control title" required autocomplete="off" value="<?=$profile->jf_khusus??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">TMT Jabatan</label>
                                <input type="date" name="tmtjabatan" class="form-control title" required autocomplete="off" value="<?=$profile->tmt_jabatan??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Tingkat Pendidikan</label>
                                <input type="text" name="tingkatpendidikan" class="form-control title" required autocomplete="off" value="<?=$profile->tingkat_pendidikan??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Nama Pendidikan</label>
                                <input type="text" name="namapendidikan" class="form-control title" required autocomplete="off" value="<?=$profile->nama_pendidikan??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Tahun Lulus</label>
                                <input type="date" name="tahunlulus" class="form-control title" required autocomplete="off" value="<?=$profile->tahun_lulus??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Diklatpim</label>
                                <input type="text" name="diklatpim" class="form-control title" required autocomplete="off" value="<?=$profile->diklatpim??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Tahun Diklatpim</label>
                                <input type="date" name="tahundiklatpim" class="form-control title" required autocomplete="off" value="<?=$profile->tahun_diklatpim??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">No. Karpeg </label>
                                <input type="text" name="nokarpeg" class="form-control title" required autocomplete="off" value="<?=$profile->no_karpeg??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">No. KTP</label>
                                <input type="text" name="noktp" class="form-control title" required autocomplete="off" value="<?=$profile->no_ktp??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">No. NPWP</label>
                                <input type="text" name="nonpwp" class="form-control title" required autocomplete="off" value="<?=$profile->no_npwp??''?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">QR Code</label>
                                <input type="text" name="qrcode" class="form-control title" required autocomplete="off" value="<?=$profile->qr_code??''?>">
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Hudis</label>
                                    <input type="text" name="hudis" class="form-control title" required autocomplete="off" value="<?=$profile->hudis??''?>">
                                </div>
                                
                                <div class="col-md-6">
                                   <label class="control-label">TMT</label>
                                    <input type="date" name="tmthudis" class="form-control title" required autocomplete="off" value="<?=$profile->tmt_hudis??''?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="control-label">No. STR</label>
                                    <input type="text" name="str" class="form-control title" required autocomplete="off" value="<?=$profile->str??''?>">
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="control-label">Tanggal Mulai STR</label>
                                    <input type="date" name="mulaistr" class="form-control title" required autocomplete="off" value="<?=$profile->mulai_str??''?>">
                                </div>
                                
                                <div class="col-md-4">
                                   <label class="control-label">Tanggal Habis STR</label>
                                    <input type="date" name="habisstr" class="form-control title" required autocomplete="off" value="<?=$profile->habis_str??''?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">No. SIP</label>
                                    <input type="text" name="sip" class="form-control title" required autocomplete="off" value="<?=$profile->sip??''?>">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="control-label">Masa Berlaku SIP</label>
                                    <input type="date" name="tglsip" class="form-control title" required autocomplete="off" value="<?=$profile->tgl_sip??''?>">
                                </div>
                            </div>
                            
                            <br>
                              
                            <!--Riwayat Pasangan  -->
                            <!--<div class="form-group">-->
                            <!--    <table class="table1">-->
	                           <!--     <tbody>-->
	                           <!--     <tr>-->
	                           <!--     	<th colspan="6"><h3>RIWAYAT SUAMI/ISTRI</h3></th>-->
	                           <!--     </tr>-->
	                           <!--     <tr>-->
	                           <!--     	<th class="sub">Nama</th>-->
	                           <!--     	<th class="sub">Tanggal Lahir</th>-->
	                           <!--     	<th class="sub">Kabupaten Lahir</th>-->
	                           <!--     	<th class="sub">Profesi</th>-->
	                           <!--     	<th class="sub">Tanggal Nikah</th>-->
	                           <!--     	<th class="sub">Pendidikan</th>-->
	                           <!--     </tr>-->
	                                
	                           <!--     	<tr>-->
	                           <!--     		<td><input type="text" name="namapasangan" class="form-control title" required autocomplete="off" value="<?=$profile->nama_pasangan??''?>"></td>-->
	                           <!--     		<td><input type="date" name="tglpasangan" class="form-control title"  autocomplete="off" value="<?=$profile->tgl_pasangan??''?>"></td>-->
	                           <!--     		<td><input type="text" name="kabpasangan" class="form-control title" required autocomplete="off" value="<?=$profile->kab_pasangan??''?>"></td>-->
	                           <!--     		<td><input type="text" name="profesipasangan" class="form-control title" required autocomplete="off" value="<?=$profile->profesi_pasangan??''?>"></td>-->
	                           <!--     		<td><input type="date" name="tglnikah" class="form-control title" required autocomplete="off" value="<?=$profile->tgl_nikah??''?>"></td>-->
	                           <!--     		<td><input type="text" name="pendidikanpasangan" class="form-control title" required autocomplete="off" value="<?=$profile->pendidikan_pasangan??''?>"></td>-->
	                           <!--     	</tr>-->
	                                	
	                           <!--     </tbody>-->
	                           <!-- </table>-->
                            <!--</div>-->
                            
                            <br>
                            
                            <!--Riwayat Anak-->
                            <!--<div class="form-group">-->
                            <!--    <table class="table1">-->
	                           <!--     <tbody>-->
	                           <!--     <tr>-->
	                           <!--     	<th colspan="5"><h3>RIWAYAT ANAK</h3></th>-->
	                           <!--     </tr>-->
	                                
	                           <!--     <tr>-->
	                           <!--     	<th class="sub">Nama</th>-->
	                           <!--     	<th class="sub">Tanggal Lahir</th>-->
	                           <!--     	<th class="sub">Kabupaten Lahir</th>-->
	                           <!--     	<th class="sub">Status</th>-->
	                           <!--     	<th class="sub">Jenis Kelamin</th>-->
	                           <!--     </tr>-->
	                                
	                           <!--     <tr>-->
	                           <!--     	<td><input type="text" name="namaanak" class="form-control title" required autocomplete="off" value="<?=$profile->nama_anak??''?>"></td>-->
	                           <!--     	<td><input type="date" name="tglanak" class="form-control title" required autocomplete="off" value="<?=$profile->tgl_anak??''?>"></td>-->
	                           <!--     	<td><input type="text" name="kabanak" class="form-control title" required autocomplete="off" value="<?=$profile->kab_anak??''?>"></td>-->
	                           <!--     	<td><input type="text" name="statusanak" class="form-control title" required autocomplete="off" value="<?=$profile->status_anak??''?>"></td>-->
	                           <!--     	<td>-->
	                           <!--     	    <select class="form-control title" name="genderanak">-->
                            <!--                    <?php if ($profile->gender_anak=="l") {?>-->
                            <!--                    <option hidden selected value="l">Laki-laki</option>-->
                            <!--                    <?php }else { ?>-->
                            <!--                    <option hidden selected value="p">Perempuan</option>-->
                            <!--                    <?php } ?>-->
                            <!--                    <option value="l">Laki-laki</option>-->
                            <!--                    <option value="p">Perempuan</option>-->
                            <!--                </select>-->
	                           <!--     	</td>-->
	                           <!--     </tr>-->
	                           <!--     </tbody>-->
	                           <!-- </table>-->
                            <!--</div>-->
                            
                            <!--<br>-->
                            
                            <!--Riwayat Pendidikan-->
                            <!--<div class="form-group">-->
                            <!--    <table class="table1">-->
	                           <!--     <tbody>-->
	                           <!--     <tr>-->
	                           <!--     	<th colspan="4"><h3>RIWAYAT PENDIDIKAN</h3></th>-->
	                           <!--     </tr>-->
	                           <!--     <tr>-->
	                           <!--     	<th class="sub">Jenjang</th>-->
	                           <!--     	<th class="sub">Jurusan/Progdi</th>-->
	                           <!--     	<th class="sub">Lembaga</th>-->
	                           <!--     	<th class="sub">Tahun</th>-->
	                           <!--     </tr>-->
	                                
	                           <!--     <tr>-->
	                           <!--     	<td><input type="text" name="jenjang" class="form-control title" required autocomplete="off" value="<?=$profile->jenjang??''?>"></td>-->
	                           <!--     	<td><input type="text" name="prodi" class="form-control title" required autocomplete="off" value="<?=$profile->prodi??''?>"></td>-->
	                           <!--     	<td><input type="text" name="lembaga" class="form-control title" required autocomplete="off" value="<?=$profile->lembaga??''?>"></td>-->
	                           <!--     	<td><input type="date" name="tahunpendidikan" class="form-control title" required autocomplete="off" value="<?=$profile->tahun_pendidikan??''?>"></td>-->
	                           <!--     </tr>-->
	                           <!--     </tbody>-->
	                           <!--  </table>-->
                            <!--</div>-->
                            
                            <!--<br>-->
                            
                            <!--Riwayat Jabatan-->
                            <!--<div>-->
                            <!--    <table class="table1">-->
	                           <!--     <tbody>-->
	                           <!--     <tr>-->
                            <!--            <th colspan="4"><h3>RIWAYAT JABATAN</h3></th>-->
	                           <!--     </tr>-->
	                           <!--     <tr>-->
                            <!--            <th class="sub">Jabatan</th>-->
                            <!--            <th class="sub">Unit Organisasi</th>-->
                            <!--            <th class="sub">Eselon</th>-->
                            <!--            <th class="sub">TMT Jabatan</th>-->
	                           <!--     </tr>-->
                                    
                            <!--            <tr>-->
                            <!--            	<td><input type="text" name="riwayatjabatan" class="form-control title" required autocomplete="off" value="<?=$profile->riwayat_jabatan??''?>"></td>-->
                            <!--            	<td><input type="text" name="riwayatunit" class="form-control title" required autocomplete="off" value="<?=$profile->riwayat_unit_org??''?>"></td>-->
                            <!--            	<td><input type="text" name="riwayateselon" class="form-control title" required autocomplete="off" value="<?=$profile->riwayat_eselon??''?>"></td>-->
                            <!--            	<td><input type="date" name="riwayattmt" class="form-control title" required autocomplete="off" value="<?=$profile->riwayat_tmt??''?>"></td>-->
                            <!--            </tr>-->
                                        
                            <!--        </tbody>-->
                            <!--    </table>-->
                            <!--</div>-->
                            
                            <br><br>
                            <div>
                                <input class="button" name="submit" id="submit" value="Update" type="submit">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane" id="pasangan" role="tabpanel">
                  <h3>RIWAYAT SUAMI/ISTRI</h3>
                  <div class="col-md-8">
                    <div class="panel panel-white">
                      <div class="panel-body">
                        <form action="<?=site_url()?>admin/karyawan/update_pasangan/<?=$profile->id?>" method="post"
                          enctype="multipart/form-data">

                          <div class="form-group">
                                <table class="table1">
	                                <tbody>
	                                <tr>
	                                	<th colspan="6"><h3>RIWAYAT SUAMI/ISTRI</h3></th>
	                                </tr>
	                                <tr>
	                                	<th class="sub">Nama</th>
	                                	<th class="sub">Tanggal Lahir</th>
	                                	<th class="sub">Kabupaten Lahir</th>
	                                	<th class="sub">Profesi</th>
	                                	<th class="sub">Tanggal Nikah</th>
	                                	<th class="sub">Pendidikan</th>
	                                </tr>
	                                
	                                	<tr>
	                                		<td><input type="text" name="namapasangan" class="form-control title" required autocomplete="off" value="<?=$profile->nama_pasangan??''?>"></td>
	                                		<td><input type="date" name="tglpasangan" class="form-control title"  autocomplete="off" value="<?=$profile->tgl_pasangan??''?>"></td>
	                                		<td><input type="text" name="kabpasangan" class="form-control title" required autocomplete="off" value="<?=$profile->kab_pasangan??''?>"></td>
	                                		<td><input type="text" name="profesipasangan" class="form-control title" required autocomplete="off" value="<?=$profile->profesi_pasangan??''?>"></td>
	                                		<td><input type="date" name="tglnikah" class="form-control title" required autocomplete="off" value="<?=$profile->tgl_nikah??''?>"></td>
	                                		<td><input type="text" name="pendidikanpasangan" class="form-control title" required autocomplete="off" value="<?=$profile->pendidikan_pasangan??''?>"></td>
	                                	</tr>
	                                	
	                                </tbody>
	                            </table>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane" id="anak" role="tabpanel">
                  <h3>RIWAYAT ANAK</h3>
                  <div class="col-md-8">
                    <div class="panel panel-white">
                      <div class="panel-body">
                        <form action="<?=site_url()?>admin/karyawan/update_anak/<?=$profile->id?>" method="post"
                          enctype="multipart/form-data">

                          <div class="form-group">
                                <table class="table1">
	                                <tbody>
	                                <tr>
	                                	<th colspan="5"><h3>RIWAYAT ANAK</h3></th>
	                                </tr>
	                                
	                                <tr>
	                                	<th class="sub">Nama</th>
	                                	<th class="sub">Tanggal Lahir</th>
	                                	<th class="sub">Kabupaten Lahir</th>
	                                	<th class="sub">Status</th>
	                                	<th class="sub">Jenis Kelamin</th>
	                                </tr>
	                                
	                                <tr>
	                                	<td><input type="text" name="namaanak" class="form-control title" required autocomplete="off" value="<?=$profile->nama_anak??''?>"></td>
	                                	<td><input type="date" name="tglanak" class="form-control title" required autocomplete="off" value="<?=$profile->tgl_anak??''?>"></td>
	                                	<td><input type="text" name="kabanak" class="form-control title" required autocomplete="off" value="<?=$profile->kab_anak??''?>"></td>
	                                	<td><input type="text" name="statusanak" class="form-control title" required autocomplete="off" value="<?=$profile->status_anak??''?>"></td>
	                                	<td>
	                                	    <select class="form-control title" name="genderanak">
                                                <?php if ($profile->gender_anak=="l") {?>
                                                <option hidden selected value="l">Laki-laki</option>
                                                <?php }else { ?>
                                                <option hidden selected value="p">Perempuan</option>
                                                <?php } ?>
                                                <option value="l">Laki-laki</option>
                                                <option value="p">Perempuan</option>
                                            </select>
	                                	</td>
	                                </tr>
	                                </tbody>
	                            </table>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane" id="pendidikan" role="tabpanel">
                  <h3>RIWAYAT PENDIDIKAN</h3>
                  <div class="col-md-8">
                    <div class="panel panel-white">
                      <div class="panel-body">
                        <form action="<?=site_url()?>admin/karyawan/update_anak/<?=$profile->id?>" method="post"
                          enctype="multipart/form-data">

                          <div class="form-group">
                                <table class="table1">
	                                <tbody>
	                                <tr>
	                                	<th colspan="4"><h3>RIWAYAT PENDIDIKAN</h3></th>
	                                </tr>
	                                <tr>
	                                	<th class="sub">Jenjang</th>
	                                	<th class="sub">Jurusan/Progdi</th>
	                                	<th class="sub">Lembaga</th>
	                                	<th class="sub">Tahun</th>
	                                </tr>
	                                
	                                <tr>
	                                	<td><input type="text" name="jenjang" class="form-control title" required autocomplete="off" value="<?=$profile->jenjang??''?>"></td>
	                                	<td><input type="text" name="prodi" class="form-control title" required autocomplete="off" value="<?=$profile->prodi??''?>"></td>
	                                	<td><input type="text" name="lembaga" class="form-control title" required autocomplete="off" value="<?=$profile->lembaga??''?>"></td>
	                                	<td><input type="date" name="tahunpendidikan" class="form-control title" required autocomplete="off" value="<?=$profile->tahun_pendidikan??''?>"></td>
	                                </tr>
	                                </tbody>
	                             </table>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane" id="jabatan" role="tabpanel">
                  <h3>RIWAYAT JABATAN</h3>
                  <div class="col-md-8">
                    <div class="panel panel-white">
                      <div class="panel-body">
                        <form action="<?=site_url()?>admin/karyawan/update_anak/<?=$profile->id?>" method="post"
                          enctype="multipart/form-data">

                          <div class="form-group">
                                <table class="table1">
	                                <tbody>
	                                <tr>
	                                	<th colspan="4"><h3>RIWAYAT PENDIDIKAN</h3></th>
	                                </tr>
	                                <tr>
	                                	<th class="sub">Jenjang</th>
	                                	<th class="sub">Jurusan/Progdi</th>
	                                	<th class="sub">Lembaga</th>
	                                	<th class="sub">Tahun</th>
	                                </tr>
	                                
	                                <tr>
	                                	<td><input type="text" name="jenjang" class="form-control title" required autocomplete="off" value="<?=$profile->jenjang??''?>"></td>
	                                	<td><input type="text" name="prodi" class="form-control title" required autocomplete="off" value="<?=$profile->prodi??''?>"></td>
	                                	<td><input type="text" name="lembaga" class="form-control title" required autocomplete="off" value="<?=$profile->lembaga??''?>"></td>
	                                	<td><input type="date" name="tahunpendidikan" class="form-control title" required autocomplete="off" value="<?=$profile->tahun_pendidikan??''?>"></td>
	                                </tr>
	                                </tbody>
	                             </table>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane" id="photo" role="tabpanel">
                  <h3>FOTO</h3>
                  <div class="col-md-8">
                    <div class="panel panel-white">
                      <div class="panel-body">
                        <form action="<?=site_url()?>admin/karyawan/update_photo/<?=$profile->id?>" method="post"
                          enctype="multipart/form-data">

                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Upload : </label>
                            <div class="col-sm-9">
                              <input id="photo" name="photo" accept="image/jpeg,image/png" type="file">
                              <small>tipe : jpg, png</small>
                              <br><br>
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                            </div>
                          </div>
                        </form>

                        <div class="form-group">
                          <div class="card-body media align-items-center">
                            <img src="<?php echo base_url().'file_upload/photo/'.$profile->photo;?>"
                              class="d-block ui-w-80" style="max-width: 100px;" id="u_file">
                            <br>
                            <a download href="<?php echo base_url().'file_upload/photo/'.$profile->photo;?>"
                              class="fa fa-lg fa-download" style="margin-bottom: 2px"> Download</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="dokumen" role="tabpanel">
                  <h3>DOKUMEN</h3>
                  <div class="card-body media align-items-center">
                    <table id="" class="display table" style="width: 100%; cellspacing: 0;">
                      <thead class="bg-dark text-white">
                        <tr>
                          <th>Dokumen</th>
                          <th>Detail</th>
                          <th>Update File</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <!--Kartu pegawai-->
                        <tr>
                          <td>
                            <h4>Kartu Pegawai</h4>
                          </td>
                          
                          <td>
                            <?php if($profile->kartu_pegawai != null && $profile->kartu_pegawai != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/karpeg/'.$profile->kartu_pegawai;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/karpeg/'.$profile->kartu_pegawai;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/karpeg/'.$profile->kartu_pegawai?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_karpeg/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="karpeg" name="karpeg" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe: jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--Akte Kelahiran-->
                        <tr>
                          <td>
                            <h4>Akta Kelahiran</h4>
                          </td>
                          <td>
                            <?php if($profile->akta_kelahiran != null && $profile->akta_kelahiran != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/akta_kelahiran/'.$profile->akta_kelahiran;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/akta_kelahiran/'.$profile->akta_kelahiran;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/akta_kelahiran/'.$profile->akta_kelahiran?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_akta/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="akta_kelahiran" name="akta_kelahiran" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--Buku Nikah-->
                        <tr>
                          <td>
                            <h4>Buku Nikah</h4>
                          </td>
                          <td>
                            <?php if($profile->buku_nikah != null && $profile->buku_nikah != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/buku_nikah/'.$profile->buku_nikah;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/buku_nikah/'.$profile->buku_nikah;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/buku_nikah/'.$profile->buku_nikah?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_nikah/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="buku_nikah" name="buku_nikah" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--KK-->
                        <tr>
                          <td>
                            <h4>KK</h4>
                          </td>
                          <td>
                            <?php if($profile->kk != null && $profile->kk != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/kk/'.$profile->kk;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/kk/'.$profile->kk;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/kk/'.$profile->kk?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_kk/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="kk" name="kk" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--KTP-->
                        <tr>
                          <td>
                            <h4>KTP</h4>
                          </td>
                          <td>
                            <?php if($profile->ktp != null && $profile->ktp != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/ktp/'.$profile->ktp;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/ktp/'.$profile->ktp;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/ktp/'.$profile->ktp?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_ktp/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="ktp" name="ktp" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--Ijazah-->
                        <tr>
                          <td>
                            <h4>Ijazah</h4>
                          </td>
                          <td>
                            <?php if($profile->ijazah != null && $profile->ijazah != "default.jpg"):?>
                            <a href="<?=base_url()?>ViewerJS/#../file_upload/ijazah/<?=$profile->ijazah?>"
                              target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/ijazah/'.$profile->ijazah;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/ijazah/'.$profile->ijazah?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_ijazah/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="ijazah" name="ijazah" accept="application/pdf"  type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : pdf</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--NPWP-->
                        <tr>
                          <td>
                            <h4>Kartu NPWP</h4>
                          </td>
                          <td>
                            <?php if($profile->kartu_npwp != null && $profile->kartu_npwp != "default.jpg"):?>
                             <a href="<?php echo base_url().'file_upload/kartu_npwp/'.$profile->kartu_npwp;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/kartu_npwp/'.$profile->kartu_npwp;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/kartu_npwp/'.$profile->kartu_npwp?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                             <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_npwp/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="kartu_npwp" name="kartu_npwp" accept="image/jpeg,image/png"  type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--STR-->
                        <tr>
                          <td>
                            <h4>Kartu STR</h4>
                          </td>
                          <td>
                            <?php if($profile->doc_str != null && $profile->doc_str != "default.jpg"):?>
                             <a href="<?php echo base_url().'file_upload/str/'.$profile->doc_str;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/str/'.$profile->doc_str;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/str/'.$profile->str?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                             <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_str/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="str" name="str" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--SIP-->
                        <tr>
                          <td>
                            <h4>Kartu SIP</h4>
                          </td>
                          <td>
                            <?php if($profile->doc_sip != null):?>
                            <a href="<?=base_url()?>ViewerJS/#../file_upload/sip/<?=$profile->doc_sip?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/sip/'.$profile->doc_sip;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/profile/qr/sip/'.$profile->doc_sip?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_sip/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="sip" name="sip" accept="application/pdf"  type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : pdf</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--Sertifikat Diklatpim-->
                        <tr>
                          <td>
                            <h4>Sertifikat Diklatpim</h4>
                          </td>
                          <td>
                            <?php if($profile->sertifikat != null):?>
                            <a href="<?=base_url()?>ViewerJS/#../file_upload/sertifikat/<?=$profile->sertifikat?>"
                              target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/sertifikat/'.$profile->sertifikat;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/sertifikat/'.$profile->sertifikat?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_sertifikat/<?=$profile->id?>"
                              method="post" enctype="multipart/form-data">
                              <input id="sertifikat" accept="application/pdf" name="sertifikat" type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : pdf</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--SK Jabatan-->
                        <tr>
                          <td>
                            <h4>SK Jabatan</h4>
                          </td>
                          <td>
                            <?php if($profile->skjab != null):?>
                            <a href="<?=base_url()?>ViewerJS/#../file_upload/skjab/<?=$profile->skjab?>"
                              target="_blank" class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/skjab/'.$profile->skjab;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/skjab/'.$profile->skjab?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>
                            <form action="<?=site_url()?>admin/karyawan/update_skjab/<?=$profile->id?>"
                              method="post" enctype="multipart/form-data">
                              <input id="skjab" accept="application/pdf" name="skjab" type="file">
                              <input class="button" name="submit" id="submit" value="Upload" type="submit">
                              <small>tipe : pdf</small>
                            </form>
                          </td>
                        </tr>
                        
                      </tbody>

                    </table>
                  </div>
                </div>

                <div class="tab-pane" id="password" role="tabpanel">
                  <h3>RESET PASSWORD</h3>
                  <div class="card-body media align-items-center">
                    <div class="col-md-8">
                      <div class="panel panel-white">
                        <div class="panel-body">
                          <div class="form-group row">
                            <label for="">tekan tombol" untuk mereset password jika lupa</label>
                            <br>
                            <a href="<?=site_url('admin/karyawan/reset_password/'.$profile->id)?>"
                              class="btn btn-danger" style="margin-bottom: 2px">Reset Password</a>
                            <br>
                            <label for="">Password akan di reset menjadi : <b>123456789</b></label>
                            <p></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="border-light m-0">
              </div>
            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modalAdd" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"  >Tambah Dokumen Lain</h4>
            </div>
            
            <div class="center">
                <div class="card-body center media align-items-center">
                    <form action="<?=site_url()?>admin/profile/upload_doc/<?=$profile->id?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-9 center">
                                <input id="doc" name="doc" accept="application/pdf" type="file">
                                <small><b>tipe : pdf, max : 2 MB</b></small>
                                <br>
                                <br>
                                <input required type="text" id="doc_name" name="doc_name" placeholder="Nama Dokumen">
                                <br><br>
                                <input class="button" name="submit" id="submit" value="Upload" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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

  $('#list-tab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })

  $(document).ready(function () {
    $('#data-table1').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });

  $(document).ready(function () {
    $('#data-table2').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });

  $(document).ready(function () {
    $('#data-table3').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });

  $(document).ready(function () {
    $('#data-table4').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });

  $(document).ready(function () {
    $('#data-table5').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });

  $(document).ready(function () {
    $('#data-table6').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });

  $(document).ready(function () {
    $('#data-table7').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });
  $(document).ready(function () {
    $('#data-table8').dataTable({
      "pageLength": 5,
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });
  $("#datepicker").datepicker({
    format: "mm-yyyy",
    startView: "months",
    minViewMode: "months"
  });

  $(function () {
    $('#datetimepicker10').datetimepicker({
      viewMode: 'years',
      format: 'MM/YYYY'
    });
  });
</script>