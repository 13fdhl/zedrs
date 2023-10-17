function reload_table(){
	let cs = $("#cs").val();
	let start_date = $("#start_date").val();
	let end_date = $("#end_date").val();
	let days = ["Ahad","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];

	$.ajax({
		url : base_url+"analytics/get_data",
		type: "GET",
    data: {
      cs: cs,
			start_date: start_date,
			end_date: end_date
    },
		dataType: "JSON",
		success: function(data)
		{
			if(data.status.code==200)
			{
				let noData = "<tr><td colspan='2'>Tidak Ada Data</td></tr>"
				//HOUR//
				//leads
				$tbody = $("#table-lead-hour>tbody");
				$list = data.result.by_hour.leads;
				$tbody.html("");
				total = 0;
				if($list.length==0){
					$tbody.html(noData);
				}else{
					$.each($list,function(i,item){
						row = "<tr><td class='center'>"+item.hour+"</td><td class='center'>"+item.count+"</td></tr>";
						total += parseInt(item.count);
						$tbody.append(row);
					});
					$tbody.append("<tr><th class='center'>Total</th><th class='center'>"+total+"</th></tr>");
				}
				//Follow Up
				$tbody = $("#table-follow-up-hour>tbody");
				$list = data.result.by_hour.follow_up;
				$tbody.html("");
				total = 0;
				if($list.length==0){
					$tbody.html(noData);
				}else{
					$.each($list,function(i,item){
						row = "<tr><td class='center'>"+item.hour+"</td><td class='center'>"+item.count+"</td></tr>";
						total += parseInt(item.count);
						$tbody.append(row);
					});
					$tbody.append("<tr><th class='center'>Total</th><th class='center'>"+total+"</th></tr>");
				}
				//Closing
				$tbody = $("#table-closing-hour>tbody");
				$list = data.result.by_hour.closing;
				$tbody.html("");
				total = 0;
				if($list.length==0){
					$tbody.html(noData);
				}else{
					$.each($list,function(i,item){
						row = "<tr><td class='center'>"+item.hour+"</td><td class='center'>"+item.count+"</td></tr>";
						total += parseInt(item.count);
						$tbody.append(row);
					});
					$tbody.append("<tr><th class='center'>Total</th><th class='center'>"+total+"</th></tr>");
				}

				//DAY//
				//leads
				$tbody = $("#table-lead-day>tbody");
				$list = data.result.by_day.leads;
				$tbody.html("");
				total = 0;
				if($list.length==0){
					$tbody.html(noData);
				}else{
					$.each($list,function(i,item){
						row = "<tr><td class='center'>"+days[item.day]+"</td><td class='center'>"+item.count+"</td></tr>";
						total += parseInt(item.count);
						$tbody.append(row);
					});
					$tbody.append("<tr><th class='center'>Total</th><th class='center'>"+total+"</th></tr>");
				}
				//Follow Up
				$tbody = $("#table-follow-up-day>tbody");
				$list = data.result.by_day.follow_up;
				$tbody.html("");
				total = 0;
				if($list.length==0){
					$tbody.html(noData);
				}else{
					$.each($list,function(i,item){
						row = "<tr><td class='center'>"+days[item.day]+"</td><td class='center'>"+item.count+"</td></tr>";
						total += parseInt(item.count);
						$tbody.append(row);
					});
					$tbody.append("<tr><th class='center'>Total</th><th class='center'>"+total+"</th></tr>");
				}
				//Closing
				$tbody = $("#table-closing-day>tbody");
				$list = data.result.by_day.closing;
				$tbody.html("");
				total = 0;
				if($list.length==0){
					$tbody.html(noData);
				}else{
					$.each($list,function(i,item){
						row = "<tr><td class='center'>"+days[item.day]+"</td><td class='center'>"+item.count+"</td></tr>";
						total += parseInt(item.count);
						$tbody.append(row);
					});
					$tbody.append("<tr><th class='center'>Total</th><th class='center'>"+total+"</th></tr>");
				}
			}
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('AJAX Error');
		}
	});
}

$(function () {
	reload_table();
})
