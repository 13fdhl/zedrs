<div class="row">
    <form action="<?=site_url()?>admin/event_pelatihan/add" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">Deskripsi Singkat Pelatihan</label>
                        <textarea name="desc" id="desc" rows="5"><?=$list->pelatihan_desc??''?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control title" placeholder="Nama pelatihan" required
                            autocomplete="off" value="<?=$list->nama_pegawai??''?>">
                    </div>
                    <div class="form-group">
                        <label>Profesi</label>
                        <input type="text" name="profesi" class="form-control title" placeholder="Nama pelatihan" required
                            autocomplete="off" value="<?=$list->profesi??''?>">
                    </div>
                    <div class="form-group">
                        <label>Unit/Bagian</label>
                        <input type="text" name="unit" class="form-control title" placeholder="Nama pelatihan" required
                            autocomplete="off" value="<?=$list->unit??''?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Pelatihan</label>
                        <input type="text" name="nama_pelatihan" class="form-control title" placeholder="Nama pelatihan" required
                            autocomplete="off" value="<?=$list->nama_pelatihan??''?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Pelatihan</label>
                        <select class="form-control title" name="jenis_pelatihan">
                          <?php if ($profile->jenis_pelatihan=="IHT") {?>
                          <option hidden selected value="IHT">IHT</option>
                          <?php }else { ?>
                          <option hidden selected value="EHT">EHT</option>
                          <?php } ?>
                          <option value="IHT">IHT</option>
                          <option value="EHT">EHT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Expired</label>
                        <input type="date" name="expired" class="form-control title"
                            required autocomplete="off" value="<?=$list->expired??''?>">
                    </div>

                    <div class="btn-group btn-group-justified" role="group">
                        <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> SIMPAN</button>
                    </div>
                </div>
            </div>
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