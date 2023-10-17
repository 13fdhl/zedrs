let jumlah_soal = $("select").length/4;
answers = [
	[],
	[],
	[],
	[[0,0,0,0,0,0],[0,0,0,0,0,0]]
];

for(i=0;i<66;i++){
	answers[0].push('-');
	answers[1].push('-');
	answers[2].push('-');
}

$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(part,number,val){
	answers[part][number] = val;
	$("input[name='answers']").val(JSON.stringify(answers));
	console.log($("input[name='answers']").val());
}

function set_answer4(number,option,el){
	let card = $("#card-"+number);
	answers[3][number][option] = parseInt($(el).val());
	$("input[name='answers']").val(JSON.stringify(answers));
	if((checkIfDuplicateExists(answers[3][number]))||(answers[3][number].includes(0))){
		if(!card.hasClass("error")){
			card.addClass("error");
		}
	}else{
		card.removeClass("error");
	}
	console.log($("input[name='answers']").val());
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
