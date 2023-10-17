let jumlah_soal = $("input[type='radio']").length/3;
answers = [];
for(i=0;i<jumlah_soal;i++){
	answers.push("-");
}
$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(number,value){
	answers[number] = value;
	$("input[name='answers']").val(JSON.stringify(answers));
	console.log(JSON.stringify(answers));
	console.log($("input[name='answers']").val());
}

$(function () {

})
