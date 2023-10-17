const findDuplicates = (arr) => {
  let sorted_arr = arr.slice().sort(); // You can define the comparing function here.
  // JS by default uses a crappy string compare.
  // (we use slice to clone the array so the
  // original array won't be modified)
  let results = [];
  for (let i = 0; i < sorted_arr.length - 1; i++) {
    if (sorted_arr[i + 1] == sorted_arr[i]) {
      results.push(sorted_arr[i]);
    }
  }
  return results;
}

function validateForm(){
	let karakteristik = [];
	$karakteristik = $("[name='karakteristik[]']");
	$karakteristik.each(function(){
    	karakteristik.push($(this).val());
	});
	if(checkIfDuplicateExists(karakteristik)){
		alert("Tidak boleh ada rangking yang sama pada pilihan karakteristik");
		arrduplicate = findDuplicates(karakteristik);
		$karakteristik.each(function(){
	    if(arrduplicate.includes($(this).val())){
				$(this).parent().parent().addClass("error");
			}else{
				$(this).parent().parent().removeClass("error");
			}
		});
		$('html, body').animate({
        scrollTop: $("#card-karakteristik").eq(0).offset().top
    }, 2000);
		return false;
	}
	//console.log(karakteristik);
}

function get_val(s){
	if(s.trim()==''){
		return '""';
	}else{
		return '"'+s.trim()+'"';
	}
}

$("#tabel-pendidikan input").on("change",function(e){
	arr = "";
	$tr = $("#tabel-pendidikan tr");
	$tr.each(function(i){
		$inputs = $(this).find("input");
		if($inputs.eq(0).val()){
			if(i>1){
				arr += ",";
			}
			arr += '"'+$inputs.eq(0).val()+'":['+get_val($inputs.eq(1).val())+','+get_val($inputs.eq(2).val())+','+get_val($inputs.eq(3).val())+','+get_val($inputs.eq(4).val())+','+get_val($inputs.eq(5).val())+']';
		}
	});
	console.log("{"+arr+"}");
	console.log(JSON.parse("{"+arr+"}"));
	$("[name='pendidikan']").val("{"+arr+"}");
})

$("#tabel-pelatihan input").on("change",function(e){
	arr = "";
	$tr = $("#tabel-pelatihan tr");
	$tr.each(function(i){
		$inputs = $(this).find("input");
		if($inputs.eq(0).val()){
			if(i>1){
				arr += ",";
			}
			arr += '['+get_val($inputs.eq(0).val())+','+get_val($inputs.eq(1).val())+','+get_val($inputs.eq(2).val())+','+get_val($inputs.eq(3).val())+']';
		}
	});
	console.log("["+arr+"]");
	console.log(JSON.parse("["+arr+"]"));
	$("[name='kursus']").val("["+arr+"]");
})

$("#tabel-pengalaman input").on("change",function(e){
	arr = "";
	$tr = $("#tabel-pengalaman tr");
	$tr.each(function(i){
		$inputs = $(this).find("input");
		if($inputs.eq(0).val()){
			if(i>1){
				arr += ",";
			}
			arr += '['+get_val($inputs.eq(0).val())+','+get_val($inputs.eq(1).val())+','+get_val($inputs.eq(2).val())+','+get_val($inputs.eq(3).val())+','+get_val($inputs.eq(4).val())+','+get_val($inputs.eq(5).val())+']';
		}
	});
	console.log("["+arr+"]");
	console.log(JSON.parse("["+arr+"]"));
	$("[name='pengalaman']").val("["+arr+"]");
})

$("#tabel-organisasi input").on("change",function(e){
	arr = "";
	$tr = $("#tabel-organisasi tr");
	$tr.each(function(i){
		$inputs = $(this).find("input");
		if($inputs.eq(0).val()){
			if(i>1){
				arr += ",";
			}
			arr += '['+get_val($inputs.eq(0).val())+','+get_val($inputs.eq(1).val())+','+get_val($inputs.eq(2).val())+','+get_val($inputs.eq(3).val())+','+get_val($inputs.eq(4).val())+','+get_val($inputs.eq(5).val())+']';
		}
	});
	console.log("["+arr+"]");
	console.log(JSON.parse("["+arr+"]"));
	$("[name='organisasi']").val("["+arr+"]");
})

$(function () {

})
