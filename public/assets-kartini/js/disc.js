let jumlah_soal = $("input[type='radio']").length/8;
answers = [];
for(i=0;i<jumlah_soal;i++){
	answers.push([0,0]);
}
$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(number,value,ml){
	if(ml){
		answers[number][0] = value;
		if(answers[number][1]==value){
			answers[number][1] = 0;
			$("#least-"+number+"-"+value).prop('checked',false);
			console.log($("#least-"+number+"-"+value));
		}
	}else{
		answers[number][1] = value;
		if(answers[number][0]==value){
			answers[number][0] = 0;
			$("#most-"+number+"-"+value).prop('checked',false);
			console.log($("#most-"+number+"-"+value));
		}
	}
	$("input[name='answers']").val(JSON.stringify(answers));
	//console.log($("input[name='answers']").val());
}

$(function () {

})
