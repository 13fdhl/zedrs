let jumlah_soal = $("input[type='checkbox']").length/10;
answers = [];
for(i=0;i<jumlah_soal;i++){
	answers.push([]);
}
$("input[name='answers']").val(JSON.stringify(answers));

function get_values(name){
	return $("input[name='"+name+"']:checked").map(function(_, el) {
	    return parseInt($(el).val());
	}).get()
}

function set_answer(el){
	let $el = $(el);
	let name = $el.attr("name");
	answers[$el.data("number")] = get_values(name);
	$("input[name='answers']").val(JSON.stringify(answers));
	console.log(JSON.stringify(answers));
	console.log($("input[name='answers']").val());
}

$(function () {

})
