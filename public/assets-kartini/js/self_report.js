let jumlah_soal = $("textarea.isian").length;
answers = [];
let $isian = $("textarea.isian");
for(i=0;i<jumlah_soal;i++){
	answers.push($isian.eq(i).val());
}
$("input[name='answers']").val(JSON.stringify(answers));

function set_answer(number,el){
	answers[number] = $(el).val();
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
