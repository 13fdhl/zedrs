let jumlah_soal = $("input.isian").length;
answers = [];
for(i=0;i<jumlah_soal;i++){
	answers.push("-");
}
$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(number,el){
	answers[number] = $(el).val();
	$("input[name='answers']").val(JSON.stringify(answers));
	console.log(JSON.stringify(answers));
	console.log($("input[name='answers']").val());
}

$(function () {

})
