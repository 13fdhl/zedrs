async function copyToClipboard(stringToCopy) {
  if (navigator.clipboard) {
    try {
      await navigator.clipboard.writeText(stringToCopy);
      console.log('string copied to clipboard');
		  alert("Berhasil disalin");
    } catch (err) {
      console.error('Failed to copy: ', err);
		  alert("Gagal disalin");
    }
  }
}

function copyText(){
	let stringToCopy = `Berikut info pengiriman pesanan Anda

Nama penerima : `+$("#nama").text()+`
No hp penerima : `+$("#hp").text()+`
No resi : `+$("#resi").text()+`
Jasa pengiriman : `+$("#pengiriman").text()+`

terimakasih sudah berbelanja di tempat kami, silahkan ditunggu barangnya 😊`;
	copyToClipboard(stringToCopy);
}

function copyResi(){
	let resi = $("#resi").text();
	copyToClipboard(resi);
}

function search(){
	$("#result-found").addClass("d-none");
	$("#result-not-found").addClass("d-none");
		$("#result-found").removeClass("d-flex");
		$("#result-not-found").removeClass("d-flex");
$('#btn-search').text('Loading...'); //change button text
$('#btn-search').attr('disabled',true); //set button enable
url = base_url + "cekresi/ajax_search";

$.ajax({
	url : url,
	type: "GET",
	data: {
		query: $("#query").val().trim(),
	},
	dataType: "JSON",
	success: function(data)
	{
		if(data.status)
		{
			$("#result-found").addClass("d-flex");
			$("#result-found").removeClass("d-none");
			$("#nama").text(data.data.nama);
			$("#hp").text(data.data.nomor_hp);
			$("#resi").text(data.data.resi);
			$("#pengiriman").text(data.data.pengiriman);
		}else{
			$("#result-not-found").addClass("d-flex");
			$("#result-not-found").removeClass("d-none");
		}
    $('#btn-search').text('Cari Data'); //change button text
    $('#btn-search').attr('disabled',false); //set button enable
	},
	error: function (jqXHR, textStatus, errorThrown)
	{
		alert('Error adding / update data');
    $('#btn-search').text('Cari Data'); //change button text
    $('#btn-search').attr('disabled',false); //set button enable
	}
});
}

$(function () {

})
