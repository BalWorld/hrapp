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
            <!--
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block col-10 pl-0">
                            <h4 class="header-title">View Recent 5 Job Lisiting</h4>
                            <p class="card-title-desc">View the Latest 5 Job Lisiting. Add/ Edit/ Manage New Jobs from
                                Careers Tab.
                            </p>
                        </div>
                        <div class="d-inline-block btn-group ml-md-2 mb-3 float-right">
                            <a type="button" class="badge badge-primary p-2 dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-plus text-white"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="">
                                <a class="dropdown-item text-dark" href="jobs">View All Jobs</a>

                                <a class="dropdown-item text-dark" href="add">Add
                                    New Job</a>
                            </div>
                        </div>

                        <table class="table table-striped dt-responsive nowrap border datatablesdash"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Job Name</th>
                                    <th>Job Title</th>
                                    <th>Location</th>
                                    <th>Expirence</th>
                                    <th>Salary</th>
                                    <th>Type</th>
                                    <th>Work Location</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($jobs as $ajob)
                                <tr>
                                    <td>{{ $ajob->bw_job_name }}</td>
                                    <td>{{ $ajob->bw_job_title }}</td>
                                    <td>{{ $ajob->bw_job_location }}</td>
                                    <td>{{ $ajob->bw_job_minexp }} - {{ $ajob->bw_job_maxexp }}</td>
                                    <td>{{ $ajob->bw_job_sal }}</td>
                                    <td>{{ $ajob->bw_job_type }}</td>
                                    <td>{{ $ajob->bw_job_wlocation }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> end col -->

            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block col-10 pl-0">
                            <h4 class="header-title">View Recent 5 Job Resumes</h4>
                            <p class="card-title-desc">View the Latest 5 Job Resumes. Add/ Edit/ Manage New Jobs
                                from Job Responses Tab.
                            </p>
                        </div>
                        <div class="d-inline-block btn-group ml-md-2 mb-3 float-right">
                            <a type="button" class="badge badge-primary p-2 dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-plus text-white"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="">
                                <a class="dropdown-item text-dark" href="responses">View All Responses</a>

                                <a class="dropdown-item text-dark" href="response">Add
                                    Internal Response</a>
                            </div>
                        </div>
                        <table class="table table-striped dt-responsive nowrap border datatablesdash"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th data-priority="2">Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Applied Job</th>
                                    <th data-priority="4">Status</th>
                                    <th data-priority="3">Download</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($responses as $aresponse)
                                <tr>
                                    <td>{{ $aresponse->name }}</td>
                                    <td>{{ $aresponse->email }}</td>
                                    <td>{{ $aresponse->phone }}</td>
                                    <td>{{ $aresponse->job }}</td>
                                    <td> @if($aresponse->status == 'Not Contacted')
                                        <p class="badge badge-danger p-2">{{$aresponse->status}}</p>
                                        @elseif($aresponse->status == 'Contacted')
                                        <p class="badge badge-success p-2">{{$aresponse->status}}</p>
                                        @elseif($aresponse->status == 'Shortlisted')
                                        <p class="badge badge-warning p-2">{{$aresponse->status}}</p>
                                        @else
                                        <p class="badge badge-light p-2 text-primary">{{$aresponse->status}}</p>
                                        @endif

                                    </td>
                                    <td>
                                        <a class="badge badge-primary p-2"
                                            href="uploads/jobresponse/{{ $aresponse->file }}" target="_blank">Download
                                            Resume</a>
                                    </td>
                                </tr>
                                @endforeach
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
@endsection
