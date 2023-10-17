let jumlah_soal = $("textarea.isian").length;
answers = [];
let $j = $(".isian");
let $p = $(".prioritas");
let $a = $(".alasan");
for(i=0;i<jumlah_soal;i++){
	answers.push({"j":$j.eq(i).val(),"p":$p.eq(i).val(),"a":$a.eq(i).val()});
}
$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(number,el){
	let $el = $(el);
	let $tr = $("#tr-"+number);
	console.log("#tr-"+number);
	let answer = {
		j: $tr.find(".isian").val(),
		p: $tr.find(".prioritas").val(),
		a: $tr.find(".alasan").val()
	};
	console.log(answer);
	answers[number] = answer;
	$("input[name='answers']").val(JSON.stringify(answers));
	console.log(JSON.stringify(answers));
	console.log($("input[name='answers']").val());
}

function save(el){
	let $el = $(el);
	if($el.text()!="Simpan"){
		return false;
	}
	$el.text("Menyimpan...");
	$.ajax({
	  type: 'POST',
	  url: $("form").attr("action"),
	  data: $("form").serialize(),
	  //or your custom data either as object {foo: "bar", ...} or foo=bar&...
	  success: function(response) {$el.text("Simpan")},
	  error: function(response) {$el.text("Simpan")},
	});
}

$(function () {

})
