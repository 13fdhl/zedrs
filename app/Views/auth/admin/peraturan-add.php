
  <div class="row">
       <form action="<?=site_url()?>admin/peraturan/add" method="post"
            enctype="multipart/form-data">
      <div class="col-md-8">
          <div class="panel panel-white">
              <div class="panel-body">
                  <div class="form-group">
                      <label class="control-label">Deskripsi Peraturan</label>
                      <textarea name="desc" id="desc" rows="5"></textarea>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="panel panel-white">
              <div class="panel-body">
                  <div class="form-group">
                      <label>Judul Peraturan</label>
                      <input type="text" name="peraturan" class="form-control title" placeholder="Judul Peraturan" required autocomplete="off">
                  </div>
                  <div class="form-group">
                      <label>Deskripsi Singkat</label>
                      <input type="text" name="short_desc" class="form-control title" placeholder="Deskripsi Singkat" required autocomplete="off">
                  </div>
                  <div class="form-group">
                      <label>Waktu Upload</label>
                      <input type="date" name="deadline" class="form-control title" required autocomplete="off" value="<?=$list->job_deadline??''?>">
                  </div>
                  <div class="form-group">
                      <label>file Upload</label>
                      <input id="doc" name="doc" type="file">
                      <small><b>tipe : pdf, max : 2 MB</b></small>
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
