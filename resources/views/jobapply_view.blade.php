@extends('layout')
@section('content')
<!-- Page-Title -->

<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Showing Job Application of {{ $jobresponse->name }}</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">HR App</a></li>
                    <li class="breadcrumb-item active">Application ID - {{ $jobresponse->id }}</li>
                </ol>
            </div>
            <div class="col-md-4">
                <!-- Side -->
            </div>
        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <input type="text" class="form-control" name="created_by" value="{{ Auth::user()->id }}"
                                required hidden>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="username">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="{{ $jobresponse->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                        value="{{ $jobresponse->email }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Phone Number" value="{{ $jobresponse->phone }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Secondary Phone</label>
                                    <input type="text" class="form-control" id="sphone" name="sphone"
                                        placeholder="Phone Number" value="{{ $jobresponse->sphone }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="primary_technology">Primary Technology</label>
                                    <input type="text" class="form-control"
                                        value="{{ $jobresponse->primary_technology }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- Not Added to DB-->
                                <div class="form-group">
                                    <label for="secondary_skills">Secondary Skills</label>
                                    <input type="text" class="form-control" id="secondary_skills"
                                        name="secondary_skills" placeholder="Secondary Skills"
                                        value="{{ $jobresponse->secondary_skills }}" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="totalexp">Total Experience</label>
                                    <input type="text" class="form-control" value="{{ $jobresponse->totalexp }}"
                                        disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="relexp">Relevant Experience</label>
                                    <input type="text" class="form-control" value="{{ $jobresponse->relexp }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="ctc">Current CTC</label>
                                    <input type="text" class="form-control" id="ctc" name="ctc"
                                        placeholder="Current CTC" value="{{ $jobresponse->ctc }}" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="expected_ctc">Expected CTC</label>
                                    <input type="text" class="form-control" id="expected_ctc" name="expected_ctc"
                                        placeholder="Expected CTC" value="{{ $jobresponse->expected_ctc }}" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="notice_period">Notice Period</label>
                                    <input type="text" class="form-control" value="{{ $jobresponse->notice_period }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="notice_period_buyable">Notice Period Buyable</label>
                                    <input type="text" class="form-control"
                                        value="{{ $jobresponse->notice_period_buyable }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="positiontype">Position Type</label>
                                    <input type="text" class="form-control" value="{{ $jobresponse->positiontype }}"
                                        disabled>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="current_organisation">Current Organisation</label>
                                    <input type="text" class="form-control" id="current_organisation"
                                        name="current_organisation" placeholder="Current Organisation"
                                        value="{{ $jobresponse->current_organisation }}" disabled>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->


            <div class="col-md-4 col-12">

                <div class="card order-1 order-md-2">
                    <div class="card-body">
                        <!-- 
                        <form method="POST" enctype="multipart/form-data">
                            @csrf -->

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        placeholder="Date of Birth (DD-MM-YYYY)" value="{{ $jobresponse->dob }}"
                                        disabled>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="location">Current Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Current Location" value="{{ $jobresponse->location }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="relocate">Ready to Relocate</label>
                                    <input type="text" class="form-control" value="{{ $jobresponse->relocate }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="qualification">Highest Qualification</label>
                                    <input type="text" class="form-control" id="qualification" name="qualification"
                                        placeholder="Highest Qualification" value="{{ $jobresponse->qualification }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="communication">Communication Skills</label>
                                    <input type="text" class="form-control" value="{{ $jobresponse->communication }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="">
                                    <p class="mb-1">
                                        <span class="badge badge-primary p-2 mb-1 d-inline-block">Application ID -
                                            {{ $jobresponse->id }}</span>
                                        <span class="badge badge-dark p-2 mb-1 d-inline-block">Created on -
                                            {{ $jobresponse->created_at }}</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                </div>

                <div class="card order-2 order-md-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-success bw-shadow-green" target="_blank"
                                    href="/jobapply/{{ $jobresponse->applied_jobid }}">View Applied Job
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="" style="position: fixed; bottom: 60px; right: 25px;z-index: 999;">
            <div class="row">
                <div class="col-12">
                    <div class="form-group mb-0">
                        <button class="bg-primary bw-shadow" data-toggle="tooltip" title="Download Resume"
                            data-placement="left" name="submit"
                            onclick="javascript:window.open('/uploads/jobapply/{{ $jobresponse->file }}','_blank')"
                            style=" height:60px;width:60px;border-radius:50%;border:none;"><i
                                class="fa fa-download text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </div>
</div>
<!-- end page-content-wrapper -->
@endsection
