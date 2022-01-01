@extends('layout')
@section('content')

<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">All Job Applications Available</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">HR App</a></li>
                    <li class="breadcrumb-item active">All Job Applications</li>
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
                        <h4 class="header-title">View All Applications</h4>
                        <p class="card-title-desc">View all Job Applications. Manage Status/ Download Applications from
                            Action Button.
                        </p>

                        <table class="data-table table table-striped dt-responsive nowraptitle border"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <div class="dt-buttons mr-2 mb-2">Export Data</div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th data-priority="1">Name</th>
                                    <th>Email</th>
                                    <th>Primary Technology</th>
                                    <th>Secondary Skills</th>
                                    <th>Phone</th>
                                    <th>Secondary Phone</th>
                                    <th>Location</th>
                                    <th>CTC</th>
                                    <th>Expected CTC</th>
                                    <th>Notice Period</th>
                                    <th>Notice Period Buyable</th>
                                    <th>Current Organisation</th>
                                    <th>Date of Birth</th>
                                    <th>Total Exp</th>
                                    <th>Relevant Exp</th>
                                    <th>Position Type</th>
                                    <th>Relocate</th>
                                    <th>Qualification</th>
                                    <th>Communication</th>
                                    <th data-priority="5">Date Added</th>
                                    <th data-priority="4">Status</th>
                                    <th data-priority="3">Resume</th>
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
        ajax: "{{ route('appliedjobs.server') }}",
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
                "data": "primary_technology"
            },
            {
                "data": "secondary_skills"
            },
            {
                "data": "phone"
            },
            {
                "data": "sphone"
            },
            {
                "data": "location"
            },
            {
                "data": "ctc"
            },
            {
                "data": "expected_ctc"
            },
            {
                "data": "notice_period"
            },
            {
                "data": "notice_period_buyable"
            },
            {
                "data": "current_organisation"
            },
            {
                "data": "dob"
            },
            {
                "data": "totalexp"
            },
            {
                "data": "relexp"
            },
            {
                "data": "positiontype"
            },
            {
                "data": "relocate"
            },
            {
                "data": "qualification"
            },
            {
                "data": "communication"
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
                "data": "status",
                render: function(data, type, row) {
                    if (data == "Not Contacted" || data == "Rejected") {
                        return '<span class="badge badge-danger p-2">' + data +
                            '</span>';
                    } else {
                        return '<span class="badge badge-success p-2">' + data +
                            '</span>';
                    }
                },
                "targets": -1
            },
            {
                "data": null,
                render: function(data, type, row) {
                    return '<a class="badge badge-primary p-2" href="uploads/jobapply/' +
                        data["file"] +
                        '" target="_blank">Download <span class="d-md-inline-block d-none">Resume</span></a>';
                },
                'searchable': false,
                'sortable': false,
                "targets": -1
            },
            {
                "data": null,
                render: function(data, type, row) {
                    return '<div class="dropdown"><a class="badge badge-light dropdown-toggle p-2"data-toggle="dropdown"type="button"aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a><div class="dropdown-menu dropdown-menu-right"style=""><a class="dropdown-item text-dark" href="/jobapply/view/' +
                        data["id"] +
                        '">View Job Application</a><a class="dropdown-item text-dark" target="_blank" href="/jobapply/' +
                        data["applied_jobid"] +
                        '">View Applied Job</a> <a class="dropdown-item text-dark" id="updateStatusBtn" data-dismiss="modal">Update Status</a> <a class="dropdown-item text-dark" onclick="deleteResponse(`' +
                        data["name"] + '`,`' +
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
    $('body').on('click', '#updateStatusBtn', function() {
        var data = table.row($(this).parents('tr')).data();
        $('.userStatusName').html(
            'Update Status of ' + data["name"]
        );
        $('.userStatusCurrent').html(
            'Current Status <span class="badge badge-primary">' + data["status"] + '</span>'
        );
        $('#modalId').attr('action', '/jobapply/status/' + data["id"] + '');
        $('#jobupdate').modal('show');
    });
});
</script>
<script>
function deleteResponse(name, id) {
    if (confirm("Are You Sure to delete " + name + " ?")) {
        window.location = "/jobapply/delete/" + id + "";
    }
    event.preventDefault();
}
</script>
<!--  modal content -->
<div id="jobupdate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Response Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="font-size-16 userStatusName"></h5>
                <p class="font-size-16 userStatusCurrent"></p>

                <form id="modalId" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <select class="custom-select" id="status" name="status">
                                <option value="Shortlisted">Shortlisted</option>
                                <option value="Contacted">Contacted</option>
                                <option value="onHold">onHold</option>
                                <option value="1st Rounded Selected">1st Rounded
                                    Selected</option>
                                <option value="2nd Rounded Selected">2nd Rounded
                                    Selected</option>
                                <option value="Hired">Hired</option>
                                <option value="Yet to Join">Yet to Join</option>
                                <option value="Offer Accepted">Offer Accepted</option>
                                <option value="1st Rounded Rejected">1st Rounded
                                    Rejected</option>
                                <option value="2nd Rounded Rejected">2nd Rounded
                                    Rejected</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Candidate Rejected Offer">Candidate
                                    Rejected Offer</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="submit" name="submit" class="btn btn-secondary waves-effect"
                                value="Update Status">
                        </div>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection
