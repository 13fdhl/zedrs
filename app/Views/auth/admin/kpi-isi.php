<div class="row">
    <form action="<?=site_url()?>admin/kpi/nilai" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="form-group">
                        <table class="table">
                            <h4>Nama : <?=$profile->first_name?></h4>
                            <h4>NIPRS :<?=$profile->username?></h4>
                            <h4>Unit Kerja : <?=$profile->jabatan?></h4>
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
                                <td>1</td>
                                <td>Tanggap terhadap kebutuhan pelanggan</td>
                                <td><input type="radio" id="1-1-4" name="1-1" value="4"></td>
                                <td><input type="radio" id="1-1-3" name="1-1" value="3"></td>
                                <td><input type="radio" id="1-1-2" name="1-1" value="2"></td>
                                <td><input type="radio" id="1-1-1" name="1-1" value="1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Berkomunikasi dengan santun, menghargai, dan ramah terhadap pelanggan</td>
                                <td><input type="radio" id="1-2-4" name="1-2" value="4"></td>
                                <td><input type="radio" id="1-2-3" name="1-2" value="3"></td>
                                <td><input type="radio" id="1-2-2" name="1-2" value="2"></td>
                                <td><input type="radio" id="1-2-1" name="1-2" value="1"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bekerja berdasarkan SPO/standar</td>
                                <td><input type="radio" id="1-3-4" name="1-3" value="4"></td>
                                <td><input type="radio" id="1-3-3" name="1-3" value="3"></td>
                                <td><input type="radio" id="1-3-2" name="1-3" value="2"></td>
                                <td><input type="radio" id="1-3-1" name="1-3" value="1"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bertanggung jawab untuk menyelesaikan masalah pelayanan (tidak defensif dan lepas
                                    tangan</td>
                                <td><input type="radio" id="1-4-4" name="1-4" value="4"></td>
                                <td><input type="radio" id="1-4-3" name="1-4" value="3"></td>
                                <td><input type="radio" id="1-4-2" name="1-4" value="2"></td>
                                <td><input type="radio" id="1-4-1" name="1-4" value="1"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Memberikan informasi yang dibutuhkan oleh pelanggan.</td>
                                <td><input type="radio" id="1-5-4" name="1-5" value="4"></td>
                                <td><input type="radio" id="1-5-3" name="1-5" value="3"></td>
                                <td><input type="radio" id="1-5-2" name="1-5" value="2"></td>
                                <td><input type="radio" id="1-5-1" name="1-5" value="1"></td>
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
                                <td><input type="radio" id="2-1-4" name="2-1" value="4"></td>
                                <td><input type="radio" id="2-1-3" name="2-1" value="3"></td>
                                <td><input type="radio" id="2-1-2" name="2-1" value="2"></td>
                                <td><input type="radio" id="2-1-1" name="2-1" value="1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jujur dalam menggunakan sumber daya di dalam lingkup kewenangan dan otoritasnya</td>
                                <td><input type="radio" id="2-2-4" name="2-2" value="4"></td>
                                <td><input type="radio" id="2-2-3" name="2-2" value="3"></td>
                                <td><input type="radio" id="2-2-2" name="2-2" value="2"></td>
                                <td><input type="radio" id="2-2-1" name="2-2" value="1"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mengambil tindakan bila menemukan orang lain yang perilakunya melanggar niali-nilai,
                                    norma, keyakinan dan etika organisasi</td>
                                <td><input type="radio" id="2-3-4" name="2-3" value="4"></td>
                                <td><input type="radio" id="2-3-3" name="2-3" value="3"></td>
                                <td><input type="radio" id="2-3-2" name="2-3" value="2"></td>
                                <td><input type="radio" id="2-3-1" name="2-3" value="1"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rela berkorban untuk kepentingan organisasi</td>
                                <td><input type="radio" id="2-4-4" name="2-4" value="4"></td>
                                <td><input type="radio" id="2-4-3" name="2-4" value="3"></td>
                                <td><input type="radio" id="2-4-2" name="2-4" value="2"></td>
                                <td><input type="radio" id="2-4-1" name="2-4" value="1"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bertindak sesuai tanggung jawab dan wewenang</td>
                                <td><input type="radio" id="2-5-4" name="2-5" value="4"></td>
                                <td><input type="radio" id="2-5-3" name="2-5" value="3"></td>
                                <td><input type="radio" id="2-5-2" name="2-5" value="2"></td>
                                <td><input type="radio" id="2-5-1" name="2-5" value="1"></td>
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
                                <td><input type="radio" id="3-1-4" name="3-1" value="4"></td>
                                <td><input type="radio" id="3-1-3" name="3-1" value="3"></td>
                                <td><input type="radio" id="3-1-2" name="3-1" value="2"></td>
                                <td><input type="radio" id="3-1-1" name="3-1" value="1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Melaksanakan tugas secara berdaya guan dan berhasil guna</td>
                                <td><input type="radio" id="3-2-4" name="3-2" value="4"></td>
                                <td><input type="radio" id="3-2-3" name="3-2" value="3"></td>
                                <td><input type="radio" id="3-2-2" name="3-2" value="2"></td>
                                <td><input type="radio" id="3-2-1" name="3-2" value="1"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mengutamakan kepentingan kedinasan darpada kepentingan pribadi dan/atau golongan
                                    sesuai dengan tugas pokok dan fungsinya.</td>
                                <td><input type="radio" id="3-3-4" name="3-3" value="4"></td>
                                <td><input type="radio" id="3-3-3" name="3-3" value="3"></td>
                                <td><input type="radio" id="3-3-2" name="3-3" value="2"></td>
                                <td><input type="radio" id="3-3-1" name="3-3" value="1"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Mampu mengembangkan diri dan meningkatkan mutu pekerjaan secara mandiri untuk
                                    kepentingan organisasi</td>
                                <td><input type="radio" id="3-4-4" name="3-4" value="4"></td>
                                <td><input type="radio" id="3-4-3" name="3-4" value="3"></td>
                                <td><input type="radio" id="3-4-2" name="3-4" value="2"></td>
                                <td><input type="radio" id="3-4-1" name="3-4" value="1"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Loyal terhadap atasan, pimpinan, pemerintah dan organisasi.</td>
                                <td><input type="radio" id="3-5-4" name="3-5" value="4"></td>
                                <td><input type="radio" id="3-5-3" name="3-5" value="3"></td>
                                <td><input type="radio" id="3-5-2" name="3-5" value="2"></td>
                                <td><input type="radio" id="3-5-1" name="3-5" value="1"></td>
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
                                <td><input type="radio" id="4-1-4" name="4-1" value="4"></td>
                                <td><input type="radio" id="4-1-3" name="4-1" value="3"></td>
                                <td><input type="radio" id="4-1-2" name="4-1" value="2"></td>
                                <td><input type="radio" id="4-1-1" name="4-1" value="1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mentaati jam masuk kerja dan jam pulang kerja</td>
                                <td><input type="radio" id="4-2-4" name="4-2" value="4"></td>
                                <td><input type="radio" id="4-2-3" name="4-2" value="3"></td>
                                <td><input type="radio" id="4-2-2" name="4-2" value="2"></td>
                                <td><input type="radio" id="4-2-1" name="4-2" value="1"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Memakai seragam/atribut sesuai dengan ketentuan</td>
                                <td><input type="radio" id="4-3-4" name="4-3" value="4"></td>
                                <td><input type="radio" id="4-3-3" name="4-3" value="3"></td>
                                <td><input type="radio" id="4-3-2" name="4-3" value="2"></td>
                                <td><input type="radio" id="4-3-1" name="4-3" value="1"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Patuh terhadap peraturan kedinasan (PP53) dan peraturan organisasi</td>
                                <td><input type="radio" id="4-4-4" name="4-4" value="4"></td>
                                <td><input type="radio" id="4-4-3" name="4-4" value="3"></td>
                                <td><input type="radio" id="4-4-2" name="4-4" value="2"></td>
                                <td><input type="radio" id="4-4-1" name="4-4" value="1"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Menjaga dan memelihara fasilitas milik Negara yang dipercayakan kepadanya</td>
                                <td><input type="radio" id="4-5-4" name="4-5" value="4"></td>
                                <td><input type="radio" id="4-5-3" name="4-5" value="3"></td>
                                <td><input type="radio" id="4-5-2" name="4-5" value="2"></td>
                                <td><input type="radio" id="4-5-1" name="4-5" value="1"></td>
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
                                <td><input type="radio" id="5-1-4" name="5-1" value="4"></td>
                                <td><input type="radio" id="5-1-3" name="5-1" value="3"></td>
                                <td><input type="radio" id="5-1-2" name="5-1" value="2"></td>
                                <td><input type="radio" id="5-1-1" name="5-1" value="1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Menghargai dan menerima pendapat orang lain</td>
                                <td><input type="radio" id="5-2-4" name="5-2" value="4"></td>
                                <td><input type="radio" id="5-2-3" name="5-2" value="3"></td>
                                <td><input type="radio" id="5-2-2" name="5-2" value="2"></td>
                                <td><input type="radio" id="5-2-1" name="5-2" value="1"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mendukung keputusan yang sudah disepakati bersama</td>
                                <td><input type="radio" id="5-3-4" name="5-3" value="4"></td>
                                <td><input type="radio" id="5-3-3" name="5-3" value="3"></td>
                                <td><input type="radio" id="5-3-2" name="5-3" value="2"></td>
                                <td><input type="radio" id="5-3-1" name="5-3" value="1"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Melaksanakan tugas yang diperintahkan atasan dengan baik dan ber tanggung jawab</td>
                                <td><input type="radio" id="5-4-4" name="5-4" value="4"></td>
                                <td><input type="radio" id="5-4-3" name="5-4" value="3"></td>
                                <td><input type="radio" id="5-4-2" name="5-4" value="2"></td>
                                <td><input type="radio" id="5-4-1" name="5-4" value="1"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Mendorong kerja sama kelompok dan tidak membuat konflik</td>
                                <td><input type="radio" id="5-5-4" name="5-5" value="4"></td>
                                <td><input type="radio" id="5-5-3" name="5-5" value="3"></td>
                                <td><input type="radio" id="5-5-2" name="5-5" value="2"></td>
                                <td><input type="radio" id="5-5-1" name="5-5" value="1"></td>
                            </tr>

                        </table>
                    </div>
                    <h4>Catatan</h4>
                    <label for="saran"><b>Pendapat dan saran atasan/pimpinan :</b></label>
                    <textarea name="saran" id="saran" rows="5" style="width: 100%;"></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-8" role="group">
            <?=var_dump($kelompok)?>
            <input type="hidden" id="" name="bawahan_id" value="<?=$profile->id?>">
            <input type="hidden" id="" name="penilai_id" value="<?=$penilai->id?>">
            <input type="hidden" id="" name="kelompok" value="<?=$kelompok[0]->kel?>">
            <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span>
                SIMPAN</button>
        </div>
    </form>
</div><!-- Row -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#desc').summernote({
            height: 300,
            toolbar: [
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['hr']],
                ['view', ["fullscreen"]],
            ],

            onImageUpload: function (files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }

        });
    });

    $(document).ready(function () {
        $('#req').summernote({
            height: 300,
            toolbar: [
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['hr']],
                ['view', ["fullscreen"]],
            ],

            onImageUpload: function (files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }

        });
    });
</script>