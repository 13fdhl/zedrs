
  <div class="row">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-8">
          <div class="panel panel-white">
              <div class="panel-body">
                  <div class="form-group">
                      <label class="control-label">Job Description</label>
                      <textarea name="desc" id="desc" rows="5"><?=$list->job_desc??''?></textarea>
                  </div>
                  <div class="form-group">
                      <label class="control-label">Job Requirement</label>
                      <textarea name="req" id="req" rows="5"><?=$list->job_req??''?></textarea>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="panel panel-white">
              <div class="panel-body">
                  <div class="form-group">
                      <label>Nama Jabatan</label>
                      <input type="text" name="jabatan" class="form-control title" placeholder="Nama Jabatan" required autocomplete="off" value="<?=$list->job_jabatan??''?>">
                  </div>
                  <div class="form-group">
                      <label>Deskripsi Singkat</label>
                      <input type="text" name="short_desc" class="form-control title" placeholder="Deskripsi Singkat" required autocomplete="off" value="<?=$list->job_sdesc??''?>">
                  </div>
                  <div class="form-group">
                      <label>Tanggal berakhir</label>
                      <input type="date" name="deadline" class="form-control title" required autocomplete="off" value="<?=$list->job_deadline??''?>">
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
$(document).ready(function(){
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

     onImageUpload: function(files, editor, welEditable) {
         sendFile(files[0], editor, welEditable);
     }

 });
});

$(document).ready(function(){
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

     onImageUpload: function(files, editor, welEditable) {
         sendFile(files[0], editor, welEditable);
     }

 });
});
</script>
