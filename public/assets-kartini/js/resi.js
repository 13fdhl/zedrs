let table = $('#leads-table').DataTable({
	//dom: 'lBfrtip',
	responsive: true,
	"processing": true, //Feature control the processing indicator.
	"serverSide": true, //Feature control DataTables' server-side processing mode.
	"order": [],
	"columnDefs": [
		{
			"targets": [0],
			"orderable": false,
		}
	],

	// Load data for the table's content from an Ajax source
	"ajax": {
		"url": base_url+"resi/ajax_list",
		"type": "POST",
		"data": function(data) {}
	}
});

function del(el){
	swal({
		title: "Hapus data?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Hapus !",
		cancelButtonText: "Batalkan",
		closeOnConfirm: false
	}, function(){
		$.ajax({
			url : base_url+"leads/ajax_delete",
			type: "POST",
			data: {
				id: $(el).data("id")
			},
			dataType: "JSON",
			success: function(data)
			{
				if(data.status)
				{
					swal("Poof! Your data has been deleted!", "success");
					reload_table();
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
			}
		});
	});

}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

$('#modal-new').on('shown.bs.modal', function () {
  $('#modal-new input').val('');
})

function save_data(){
	/*if($("#phone-number").val().trim()){

	}*/
  $('#btnSave').text('Menyimpan...'); //change button text
  $('#btnSave').attr('disabled',true); //set button disable

	url = base_url + "resi/ajax_add";

	$.ajax({
		url : url,
		type: "POST",
		data: {
			nama: $("#nama").val().trim(),
			hp: $("#hp").val().trim(),
			pengiriman: $("#pengiriman").val().trim(),
			resi: $("#resi").val().trim(),
			ongkir: $("#ongkir").val().trim()
		},
		dataType: "JSON",
		success: function(data)
		{
			if(data.status)
			{
				reload_table();
			}
      $('#btnSave').text('Simpan'); //change button text
      $('#btnSave').attr('disabled',false); //set button enable
			$("#modal-new").modal("hide");
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error adding / update data');
      $('#btnSave').text('Simpan'); //change button text
      $('#btnSave').attr('disabled',false); //set button enable
		}
	});
}

function changeStatus(el){
	$el = $(el);
	url = base_url + "leads/ajax_update_status";

	$.ajax({
		url : url,
		type: "POST",
		data: {
			id: $el.data('id'),
			status: $el.children(':selected').val()
		},
		dataType: "JSON",
		success: function(data)
		{
			if(data.status)
			{
				reload_table();
			}
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error adding / update data');
		}
	});
}

function setToFollowUp(el){
	$el = $(el);
	url = base_url + "leads/ajax_update_status";

	$.ajax({
		url : url,
		type: "POST",
		data: {
			id: $el.data('id'),
			status: "Follow Up"
		},
		dataType: "JSON",
		success: function(data)
		{
			if(data.status)
			{
				reload_table();
			}
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error adding / update data');
		}
	});
}

$(function () {
	$("select[name='status']").on("change",function(){
		reload_table();
	});
})
