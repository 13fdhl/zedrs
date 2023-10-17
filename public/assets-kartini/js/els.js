let jumlah_soal = $("select").length/4;
answers = [];
for(i=0;i<jumlah_soal;i++){
	answers.push([0,0,0,0]);
}
$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(number,option,el){
	let card = $("#card-"+number);
	answers[number][option] = parseInt($(el).val());
	$("input[name='answers']").val(JSON.stringify(answers));
	if((checkIfDuplicateExists(answers[number]))||(answers[number].includes(0))){
		if(!card.hasClass("error")){
			card.addClass("error");
		}
	}else{
		card.removeClass("error");
	}
}

function validateForm(){
	if($(".error").length>0){
		$('html, body').animate({
        scrollTop: $(".error").eq(0).offset().top
    }, 2000);
		return false;
	}
}

$(function () {

})
