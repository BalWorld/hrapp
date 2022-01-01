/* BW Datatables */
$(document).ready(function () {
    $('.datatablesortid').DataTable({
        "order": [
            [0, "desc"]
        ],
        "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false
        }]
    });
});

$(document).ready(function () {
    $('.datatablesortid-buttons').DataTable({
        "order": [
            [0, "desc"]
        ],
        "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false
        }],
        dom: 'Bfrtip',
        buttons: [{
            extend: 'csv',
            exportOptions: {
                columns: ":not(.actions)"
            },
        }, {
            extend: 'excel',
            exportOptions: {
                columns: ":not(.actions)"
            },
        }, {
            extend: 'print',
            exportOptions: {
                columns: ":not(.actions)"
            },
        }]
    });
});

$(document).ready(function () {
    $('.datatablesdash').DataTable({
        "paging": false,
        "bFilter": false,
        "info": false
    });
});

$(document).ready(function () {
    $('.datatables-colsearch').DataTable({
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function (d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        }
    });
});
