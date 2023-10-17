$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

function checkIfDuplicateExists(w){
    return new Set(w).size !== w.length
}

function demos(){
	swal("Error!", "This feature is not available in demo version.", "error");
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
