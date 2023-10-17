function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax
}

$(document).ready(function() {
    //datatables
    table = $('#data-table').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

$(document).ready(function() {
    //datatables
    table = $('#data-table1').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

$(document).ready(function() {
    //datatables
    table = $('#data-table2').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

$(document).ready(function() {
    //datatables
    table = $('#data-table3').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

$(document).ready(function() {
    //datatables
    table = $('#data-table4').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

$(document).ready(function() {
    //datatables
    table = $('#data-table5').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

$(document).ready(function() {
    //datatables
    table = $('#data-table6').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});

// $(document).ready(function() {
//     //datatables
//     table = $('#data-table20').DataTable({
//         dom: 'lBfrtip',
//         responsive: true,
//         "processing": true, //Feature control the processing indicator.
//         "serverSide": true, //Feature control DataTables' server-side processing mode.
//         "order": [], //Initial no order.

//         // Load data for the table's content from an Ajax source
//         "ajax": {
//             "url": base_url + "admin/words/ajax_list",
//             "type": "POST",
//             "data": function(data) {}
//         },

//         //Set column definition initialisation properties.
//         "columnDefs": [{
//             "searchable": false,
//             "targets": 4
//         }]
//     });
// });

$(document).ready(function() {
    //datatables
    table = $('#data-table7').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/words/ajax_list",
            "type": "POST",
            "data": function(data) {}
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0, 4],
            "orderable": false,
        }]
    });
});