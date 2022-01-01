@extends('layout')
@section('content')

<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">All Job Lisiting</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">HR App</a></li>
                    <li class="breadcrumb-item active">All Job Lisiting</li>
                </ol>
            </div>
            <div class="col-md-4">
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
                        <h4 class="header-title">View All Job lisiting</h4>
                        <p class="card-title-desc">View all Jobs Listed. Manage All Listed Jobs Here.
                        </p>

                        <table class="data-table table table-striped dt-responsive nowraptitle border"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <div class="dt-buttons mr-2 mb-2">Export Data</div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th data-priority="1">Job Name</th>
                                    <th>Job Title</th>
                                    <th>Primary Skills</th>
                                    <th>Secondary Skills</th>
                                    <th>Location</th>
                                    <th>Experience</th>
                                    <th>Salary Range</th>
                                    <th>Job Type</th>
                                    <th>Work Location</th>
                                    <th>Added by</th>
                                    <th>Added Date</th>
                                    <th data-priority="2">action</th>
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
        ajax: "{{ route('jobs.server') }}",
        columns: [{
                "data": "id"
            },
            {
                "data": "bw_job_name"
            },
            {
                "data": "bw_job_title"
            },
            {
                "data": "bw_job_pskills"
            },
            {
                "data": "bw_job_sskills"
            },
            {
                "data": "bw_job_location"
            },
            {
                "data": "bw_job_exp"
            },
            {
                "data": null,
                render: function(data, type, row) {
                    return '<span class="badge badge-primary p-2">' +
                        data["bw_job_minsal"] + ' - ' +
                        data["bw_job_maxsal"] + '</span>';
                },
                'searchable': false,
                'sortable': false,
                "targets": -1
            },
            {
                "data": "bw_job_type"
            },
            {
                "data": "bw_job_wlocation"
            },
            {
                "data": "created_by_name"
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
            {
                "data": null,
                render: function(data, type, row) {
                    return '<div class="dropdown"><a class="badge badge-light dropdown-toggle p-2"data-toggle="dropdown"type="button"aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a><div class="dropdown-menu dropdown-menu-right"style=""><a class="dropdown-item text-dark" href="/jobapply/' +
                        data["id"] +
                        '" target="_blank">Get Shareable Link</a> <a class="dropdown-item text-dark" onclick="deleteJob(`' +
                        data["bw_job_title"] + '`,`' +
                        data["id"] + '`);">Delete</a></div>';
                },
                'searchable': false,
                'sortable': false,
                "targets": -1
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
                        return 'Details for ' + data["name"];
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
<script>
function deleteJob(name, id) {
    if (confirm("Are You Sure to delete " + name + " ?")) {
        window.location = "/job/delete/" + id + "";
    }
    event.preventDefault();
}
</script>
@endsection
