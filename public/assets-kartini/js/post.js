$(function () {
	$select_cat = $("select[name='category']");
	$("#form-new-category").on("submit",function(e){
		e.preventDefault();
		$.post(base_url + "post/new_category/"+$("#category-name").val(),function(data){
			$select_cat.append("<option value="+data.id+">"+data.name+"</option>");
			$select_cat.val(data.id);
			$select_cat.change();
		});
		$("#modalAddCategory").modal("hide");
	});
})