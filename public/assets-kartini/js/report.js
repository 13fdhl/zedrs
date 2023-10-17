function poll(fn, timeout, interval) {
    var endTime = Number(new Date()) + (timeout || 2000);
    interval = interval || 100;

    var checkCondition = function(resolve, reject) {
        // If the condition is met, we're done!
        var result = fn();
        if(result) {
            resolve(result);
        }
        // If the condition isn't met but the timeout hasn't elapsed, go again
        else if (Number(new Date()) < endTime) {
            setTimeout(checkCondition, interval, resolve, reject);
        }
        // Didn't match and too much time, reject!
        else {
            reject(new Error('timed out for ' + fn + ': ' + arguments));
        }
    };

    return new Promise(checkCondition);
}

function updateData(){
	$.ajax({
		url : base_url+"report/get_data",
		type: "GET",
    data: {
      today: $("#today").val()
    },
		dataType: "JSON",
		success: function(data)
		{
			if(data.status.code==200)
			{
				$("#last-updated").text(data.status.last_updated);

				$("#month_leads").text(data.result.this_month.leads);
				$("#month_closing").text(data.result.this_month.closing);
				$("#month_rate").text((data.result.this_month.closing/data.result.this_month.leads*100).toFixed(2)+"%");

				$("#today_leads").text(data.result.today.leads);
				$("#today_closing").text(data.result.today.closing);
				$("#today_rate").text((data.result.today.closing/data.result.today.leads*100).toFixed(2)+"%");

				let $tbody = $("#leads-table").find("tbody");
				$tbody.html("");
				$.each(data.result.data,function(i,item){
					row = "<tr><td>"+item.name+"</td><td class='center'>"+item.this_month.leads+"</td><td class='center'>"+item.this_month.closing+"</td><td class='center'>"+(item.this_month.closing/item.this_month.leads*100).toFixed(2)+"%</td><td class='center'>"+item.today.leads+"</td><td class='center'>"+item.today.closing+"</td><td class='center'>"+(item.today.closing/item.today.leads*100).toFixed(2)+"%</td></tr>";
					$tbody.append(row);
				});
			}
			setTimeout(updateData, 30000);
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error adding / update data');
			setTimeout(updateData, 30000);
		}
	});
}
updateData();

$("#today").on("change",function(){
  console.log("changed");
  $.ajax({
    url : base_url+"report/get_data",
    type: "GET",
    data: {
      today: $("#today").val()
    },
    dataType: "JSON",
    success: function(data)
    {
      if(data.status.code==200)
      {
        $("#last-updated").text(data.status.last_updated);

        $("#month_leads").text(data.result.this_month.leads);
        $("#month_closing").text(data.result.this_month.closing);
        $("#month_rate").text((data.result.this_month.closing/data.result.this_month.leads*100).toFixed(2)+"%");

        $("#today_leads").text(data.result.today.leads);
        $("#today_closing").text(data.result.today.closing);
        $("#today_rate").text((data.result.today.closing/data.result.today.leads*100).toFixed(2)+"%");

        let $tbody = $("#leads-table").find("tbody");
        $tbody.html("");
        $.each(data.result.data,function(i,item){
          row = "<tr><td>"+item.name+"</td><td class='center'>"+item.this_month.leads+"</td><td class='center'>"+item.this_month.closing+"</td><td class='center'>"+(item.this_month.closing/item.this_month.leads*100).toFixed(2)+"%</td><td class='center'>"+item.today.leads+"</td><td class='center'>"+item.today.closing+"</td><td class='center'>"+(item.today.closing/item.today.leads*100).toFixed(2)+"%</td></tr>";
          $tbody.append(row);
        });
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
});
//setTimeout(updateData, 10000);
//updateData();

/*poll(updateData(), 2000, 150).then(function() {
    // Polling done, now do something else!
}).catch(function() {
    // Polling timed out, handle the error!
});*/
