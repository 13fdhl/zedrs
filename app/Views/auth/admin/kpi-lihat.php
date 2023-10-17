<!-- <?= var_dump($kpi)?> -->
<button type="button" name="button" class="btn btn-primary no-print center" style="margin-left: 0px !important;" onclick="cetak_lj()">Cetak</button>

<div class="row">
        <div class="col-md-8">
            <div class="panel panel-white">
                <div class="panel-body" style="margin-top: 3%; margin-left:3.5%; margin-right:3.5%">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6" style="border: 1px solid black">
                                <h3 style="text-align: center;">Pegawai yang Dinilai</h3>
                                <h4>Nama : <?=$profile->first_name?></h4>
                                <h4>NIPRS : <?=$profile->username?></h4>
                                <h4>Unit Kerja : <?=$profile->jabatan?></h4>
                            </div>
                            <div class="col-xs-6" style="border: 1px solid black">
                                <h3  style="text-align: center;">Penilai</h3>
                                <h4>Nama : <?=$penilai->first_name?></h4>
                                <h4>NIPRS : <?=$penilai->username?></h4>
                                <h4>Unit Kerja : <?=$penilai->jabatan?></h4>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <td colspan="2" style="text-align:center;">Aspek yang Dinilai</td>
                                <td colspan="4" style="text-align: center;">Nilai</td>
                            </tr>
                            <tr>
                                <td><b>I</b></td>
                                <td><b>ORIENTASI PELAYANAN</b></td>
                                <td><b>4</b></td>
                                <td><b>3</b></td>
                                <td><b>2</b></td>
                                <td><b>1</b></td>
                            </tr>
                            <tr>
                                <?php
                               
                                ?>
                                <td>1</td>
                                <td>Tanggap terhadap kebutuhan pelanggan</td>
                                <td><?=($jawab1[1]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[1]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[1]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[1]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Berkomunikasi dengan santun, menghargai, dan ramah terhadap pelanggan</td>
                                <td><?=($jawab1[2]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[2]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[2]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[2]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bekerja berdasarkan SPO/standar</td>
                                <td><?=($jawab1[3]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[3]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[3]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[3]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bertanggung jawab untuk menyelesaikan masalah pelayanan (tidak defensif dan lepas
                                    tangan</td>
                                <td><?=($jawab1[4]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[4]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[4]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[4]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Memberikan informasi yang dibutuhkan oleh pelanggan.</td>
                                <td><?=($jawab1[5]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[5]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[5]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab1[5]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;"><b> Nilai I : <?php echo $total1/20*100?> %</b></td>
                                <td colspan="4"></td></td>
                            </tr>
                            <tr>
                                <td><b>II</b></td>
                                <td><b>INTEGRITAS</b></td>
                                <td><b>4</b></td>
                                <td><b>3</b></td>
                                <td><b>2</b></td>
                                <td><b>1</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Melakukan tindakan yang tidak melanggar nilai-nilai, norma, keyakinan dank ode etik
                                    organisasin</td>
                                <td><?=($jawab2[1]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[1]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[1]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[1]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jujur dalam menggunakan sumber daya di dalam lingkup kewenangan dan otoritasnya</td>
                                <td><?=($jawab2[2]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[2]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[2]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[2]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mengambil tindakan bila menemukan orang lain yang perilakunya melanggar niali-nilai,
                                    norma, keyakinan dan etika organisasi</td>
                                <td><?=($jawab2[3]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[3]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[3]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[3]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rela berkorban untuk kepentingan organisasi</td>
                                <td><?=($jawab2[4]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[4]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[4]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[4]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bertindak sesuai tanggung jawab dan wewenang</td>
                                <td><?=($jawab2[5]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[5]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[5]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab2[5]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;"><b> Nilai II : <?php echo $total2/20*100?> %</b></td>
                                <td colspan="4"></td></td>
                            </tr>
                            <tr>
                                <td><b>III</b></td>
                                <td><b>KOMITMEN</b></td>
                                <td><b>4</b></td>
                                <td><b>3</b></td>
                                <td><b>2</b></td>
                                <td><b>1</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Berusaha dengan sungguh-sungguh menegakkan ideologi negara : Pacasila, UUD 1945,
                                    NKRI, Bhineka Tunggal Ika</td>
                                <td><?=($jawab3[1]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[1]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[1]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[1]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Melaksanakan tugas secara berdaya guan dan berhasil guna</td>
                                <td><?=($jawab3[2]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[2]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[2]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[2]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mengutamakan kepentingan kedinasan darpada kepentingan pribadi dan/atau golongan
                                    sesuai dengan tugas pokok dan fungsinya.</td>
                                <td><?=($jawab3[3]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[3]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[3]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[3]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Mampu mengembangkan diri dan meningkatkan mutu pekerjaan secara mandiri untuk
                                    kepentingan organisasi</td>
                                <td><?=($jawab3[4]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[4]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[4]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[4]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Loyal terhadap atasan, pimpinan, pemerintah dan organisasi.</td>
                                <td><?=($jawab3[5]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[5]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[5]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab3[5]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;"><b> Nilai II : <?php echo $total3/20*100?> %</b></td>
                                <td colspan="4"></td></td>
                            </tr>
                            <tr>
                                <td><b>IV</b></td>
                                <td><b>KEDISIPLINAN</b></td>
                                <td><b>4</b></td>
                                <td><b>3</b></td>
                                <td><b>2</b></td>
                                <td><b>1</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Melaksanakan apel pagi</td>
                                <td><?=($jawab4[1]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[1]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[1]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[1]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mentaati jam masuk kerja dan jam pulang kerja</td>
                                <td><?=($jawab4[2]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[2]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[2]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[2]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Memakai seragam/atribut sesuai dengan ketentuan</td>
                                <td><?=($jawab4[3]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[3]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[3]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[3]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Patuh terhadap peraturan kedinasan (PP53) dan peraturan organisasi</td>
                                <td><?=($jawab4[4]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[4]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[4]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[4]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Menjaga dan memelihara fasilitas milik Negara yang dipercayakan kepadanya</td>
                                <td><?=($jawab4[5]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[5]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[5]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab4[5]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;"><b> Nilai IV : <?php echo $total4/20*100?> %</b></td>
                                <td colspan="4"></td></td>
                            </tr>
                            <tr>
                                <td><b>V</b></td>
                                <td><b>KERJASAMA</b></td>
                                <td><b>4</b></td>
                                <td><b>3</b></td>
                                <td><b>2</b></td>
                                <td><b>1</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Bekerja sama dengan rekan kerja dan atasan dalam maupun luar organisasi</td>
                                <td><?=($jawab5[1]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[1]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[1]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[1]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Menghargai dan menerima pendapat orang lain</td>
                                <td><?=($jawab5[2]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[2]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[2]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[2]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mendukung keputusan yang sudah disepakati bersama</td>
                                <td><?=($jawab5[3]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[3]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[3]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[3]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Melaksanakan tugas yang diperintahkan atasan dengan baik dan ber tanggung jawab</td>
                                <td><?=($jawab5[4]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[4]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[4]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[4]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Mendorong kerja sama kelompok dan tidak membuat konflik</td>
                                <td><?=($jawab5[5]==4) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[5]==3) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[5]==2) ? '<i class="fa fa-check"></i>':'' ?></td>
                                <td><?=($jawab5[5]==1) ? '<i class="fa fa-check"></i>':'' ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;"><b> Nilai V : <?php echo $total5/20*100?> %</b></td>
                                <td colspan="4"></td></td>
                            </tr>

                            <tr>
                                <td colspan="2" style="text-align: center;"><b> TOTAL NILAI : <?=$total?> </b></td>
                                <td colspan="4"><h4> Kategori : <?=$kategori?> </h4></td>
                            </tr>
                        </table>
                    </div>
                    <h4>Catatan</h4>
                    <div class="col-md-8">
                        <label for="saran"><b>Pendapat dan saran atasan/pimpinan :</b></label>
                        <p><?=$kpi->saran?></p>
                    </div>
                    <div class="col-md-8">
                        <label for="saran"><b>Rekomendasi (Hanya untuk PTT):</b></label>
                            <table class="">
                                <tr>
                                    <td style="border: 1px solid black; width :10%"></td>
                                    <td>&nbsp;Dapat diperpanjang / diberhentikan* hubungan kerja / jabatannya* <br>&nbsp;sebagai........................</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black"></td>
                                    <td>&nbspdiberhentikan mulai tanggal <br>&nbsp ........................</td>
                                </tr>
                            </table>
                    </div>
                    <div class="row" style="margin-top:10%">
                            <div class="col-xs-6">
                                <p style="text-align: center;">Menyetujui</p>
                                <p style="text-align: center;">Atasan Penilai</p>
                                <p style="text-align: center;margin-top:25%">………………………………………</p>
                                <p style="text-align: center;">NIP. ………………………………….</p>
                            </div>
                            <div class="col-xs-6">
                                <p  style="text-align: center;">Tasikmalaya, ...... <?=date(" F Y")?></p>
                                <p style="text-align: center;">Penilai</p>
                                <p style="text-align: center;margin-top:25%">………………………………………</p>
                                <p style="text-align: center;">NIP. ………………………………….</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-8" role="group">
            <?=var_dump($kelompok)?>
        </div> -->
</div><!-- Row -->
