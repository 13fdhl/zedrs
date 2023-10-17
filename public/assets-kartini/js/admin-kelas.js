function show_modal_reply(id){
	let $modal = $("#modal-reply");
	$modal.find("[name='instrument']").val($("[name='select-instrument']").children().eq(0).val());
	$modal.find('textarea').val("");
	$modal.find("[name='parent']").val(id);
	$modal.modal("show");
}

function send_reply(){
	let $modal = $("#modal-reply");
	//$modal.find("[name='instrument']").val();
	//$modal.find('textarea').val("");
	//$modal.find("[name='parent']").val(id);
	$.post(base_url+"admin/kelas/qna_reply",{
		instrument: $("[name='select-instrument']").children().eq(0).val(),
		message: $modal.find("textarea").val(),
		parent: $modal.find("[name='parent']").val(),
		assessment_id: $modal.find("[name='assessment_id']").val()
	},function(res){
		console.log("Sukses");
		Qna.get_qna();
		$modal.modal("hide");
	})
	.fail(function(){
		alert("Galat!");
		$modal.modal("hide");
	});
}

function change_instrument_qna(el){
	let $el = $(el);
	Qna.set_instrument($el.val());
	Qna.get_qna();
}

$(function () {

})
