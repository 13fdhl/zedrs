$(document).ready(function(){
  $('.dropify').dropify({
      messages: {
          default: 'Drag atau drop untuk memilih gambar',
          replace: 'Ganti',
          remove:  'Hapus',
          error:   'error'
      },
      imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'svg']
  });

  /*var editor = CodeMirror.fromTextArea(document.getElementById("contents"), {
    lineNumbers: true
  });*/

  $('.title').keyup(function(){
      var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
      title = title.replace(/-+/g,'-');
      $('.slug').val(title);
  });
});
