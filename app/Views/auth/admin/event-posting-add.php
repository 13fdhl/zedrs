<div class="row">
    <form action="<?=site_url()?>admin/event/add" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">Event Description</label>
                        <textarea name="desc" id="desc" rows="5"><?=$list->event_desc??''?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" name="name" class="form-control title" placeholder="Nama Event" required
                            autocomplete="off" value="<?=$list->event_name??''?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Singkat</label>
                        <input type="text" name="short_desc" class="form-control title" placeholder="Deskripsi Singkat"
                            required autocomplete="off" value="<?=$list->event_sdesc??''?>">
                    </div>
                    <div class="form-group">
                        <label>Link Video</label>
                        <input type="text" name=link_vid class="form-control title"
                            placeholder="https://www.youtube.com/watch?v=_contoh"  autocomplete="off"
                            value="<?=$list->event_video??''?>">
                    </div>

                    <?php if ($list!=null) { ?>

                    <div class="form-group" style="text-align: center;">
                        <label for=""> <b>Video</b> </label> <br>
                        <iframe class="d-block ui-w-100" style="width: 300px; height:auto" alt="event photo" src="https://www.youtube.com/embed/<?=youtube_filter($list->event_video)?>">
                        </iframe>
                    </div>
                    <?php }; ?>
                        
                    <div class="form-group">
                        <br>
                        <label>Photo Event</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Upload : </label>
                            <div class="col-sm-9">
                                <input id="photo" name="photo" type="file">
                                <small>tipe : jpg, png</small>
                            </div>
                        </div>
                        <br>
                        <?php if ($list!=null) { ?>

                        <div class="form-group" style="text-align: center;">
                            <label for=""> <b>Photo</b> </label> <br>
                            <img src="<?php echo base_url().'file_upload/event/'.$list->event_photo;?>"
                                class="d-block ui-w-100" style="width: 300px; height:auto" alt="event photo"
                                id="u_file">
                        </div>
                        <?php }; ?>
                    </div>
                    <div class="btn-group btn-group-justified" role="group">
                        <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span
                                class="icon-cursor"></span> SIMPAN</button>
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