$(document).ready(function() {
    if ($("#data-table").length > 0) {
        $('#data-table').dataTable();
    }
    if ($("#data-table1").length > 0) {
        $('#data-table1').dataTable();
    }
    if ($("#data-table2").length > 0) {
        $('#data-table2').dataTable();
    }
    if ($("#data-table3").length > 0) {
        $('#data-table3').dataTable();
    }
    if ($("#data-table4").length > 0) {
        $('#data-table4').dataTable();
    }
    if ($("#data-table5").length > 0) {
        $('#data-table5').dataTable();
    }
    if ($("#data-table6").length > 0) {
        $('#data-table6').dataTable();
    }
    if ($("#data-table7").length > 0) {
        $('#data-table7').dataTable();
    }
    if ($("#data-table8").length > 0) {
        $('#data-table8').dataTable();
    }
    if ($("#data-table20").length > 0) {
        $('#data-table20').dataTable({
            "columnDefs": [{
                'searchable': false,
                'targets': 4
            }]
        });
    }
    if ($(".datatables").length > 0) {
        $(".datatables").dataTable();
    }
});