@extends('layout')
@section('content')

<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">All Users</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">HR App</a></li>
                    <li class="breadcrumb-item active">All Users</li>
                </ol>
            </div>
            <div class="col-md-4">
                <!-- Menu -->
            </div>
        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">View All Users</h4>
                        <p class="card-title-desc">View all Users using HR App</p>

                        <table class="data-table table table-striped dt-responsive nowraptitle border"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <div class="dt-buttons mr-2 mb-2">Export Data</div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th data-priority="1">Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Date Joined</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div>
    <!-- end container-fluid -->
</div>
<!-- end page-content-wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    /* For Export Buttons available inside jquery-datatable "server side processing" - Start
    - due to "server side processing" jquery datatble doesn't support all data to be exported
    - below function makes the datatable to export all records when "server side processing" is on */

    function newexportaction(e, dt, button, config) {
        var self = this;
        var oldStart = dt.settings()[0]._iDisplayStart;
        dt.one('preXhr', function(e, s, data) {
            // Just this once, load all data from the server...
            data.start = 0;
            data.length = 2147483647;
            dt.one('preDraw', function(e, settings) {
                // Call the original action function
                if (button[0].className.indexOf('buttons-copy') >= 0) {
                    $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button,
                        config);
                } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                    $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button,
                            config) :
                        $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button,
                            config);
                } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                    $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                        $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button,
                            config) :
                        $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button,
                            config);
                } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                    $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button,
                            config) :
                        $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button,
                            config);
                } else if (button[0].className.indexOf('buttons-print') >= 0) {
                    $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                }
                dt.one('preXhr', function(e, s, data) {
                    // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                    // Set the property to what it was before exporting.
                    settings._iDisplayStart = oldStart;
                    data.start = oldStart;
                });
                // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                setTimeout(dt.ajax.reload, 0);
                // Prevent rendering of the full data to the DOM
                return false;
            });
        });
        // Requery the server with the new one-time export settings
        dt.ajax.reload();
    };

    //For Export Buttons available inside jquery-datatable "server side processing" - End
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        "oLanguage": {
            "sProcessing": "Dont Blink - Fetching Data from Server",
            "oPaginate": {
                sNext: '<i class="fa fa-chevron-right" ></i>',
                sPrevious: '<i class="fa fa-chevron-left" ></i>'
            },
        },
        ajax: "{{ route('userServerData.server') }}",
        columns: [{
                "data": "id"
            },
            {
                "data": "name"
            },
            {
                "data": "email"
            },
            {
                "data": "role",
                render: function(data, type, row) {
                    if (data == "0") {
                        return '<span class="badge badge-primary p-2">User</span>';
                    } else {
                        return '<span class="badge badge-success p-2">Admin</span>';
                    }
                },
                'searchable': false,
                'sortable': true,
                "targets": -1
            },
            {
                "data": "created_at",
                "render": function(data) {
                    if (data !== null) {
                        var javascriptDate = new Date(data);
                        javascriptDate = javascriptDate.getMonth() + 1 + "/" + javascriptDate
                            .getDate() + "/" + javascriptDate.getFullYear();
                        return javascriptDate;
                    } else {
                        return "";
                    }
                },

            },
        ],
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
            action: newexportaction,
            exportOptions: {
                columns: ":not(.actions)"
            },
        }, {
            extend: 'excel',
            action: newexportaction,
            exportOptions: {
                columns: ":not(.actions)"
            },
        }],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return data["name"];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: 'table'
                })
            }
        }
    });
});
</script>

@endsection
