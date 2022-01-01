@extends('layout')
@section('content')
<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Add New Job Lisiting</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">HR App</a></li>
                    <li class="breadcrumb-item active">New Job Lisiting</li>
                </ol>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <form class="needs-validation" novalidate method="POST" action="/jobs">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Job Information</h4>
                            <p class="card-title-desc">Add New Job Lisiting. All Fields are Required.
                            </p>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <input type="text" class="form-control" name="created_by"
                                            value="{{ Auth::user()->id }}" required hidden>
                                        <input type="text" class="form-control" name="created_by_name"
                                            value="{{ Auth::user()->name }}" required hidden>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="jobname">Job name</label>
                                                <input type="text" class="form-control" name="jobname"
                                                    placeholder="Job name" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="jobtitle">Job Title</label>
                                                <input type="text" class="form-control" id="jobtitle" name="jobtitle"
                                                    placeholder="Job Title" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="jobskills">Primary Skills</label>
                                            <input type="text" class="form-control" id="jobskills" name="jobskills"
                                                placeholder="Primary Skills" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="secondaryskills">Secondary Skills</label>
                                            <input type="text" class="form-control" id="secondaryskills"
                                                name="secondaryskills" placeholder="Secondary Skills" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="optionalskills">Optional Skills</label>
                                            <input type="text" class="form-control" id="optionalskills"
                                                name="optionalskills" placeholder="Optional Skills" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                placeholder="Location" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <label for="exp">Experience Level</label>
                                            <select class="custom-select form-control" id="exp" name="exp">
                                                <option value="Fresher">Fresher</option>
                                                <option value="Less than 1 Year">Less than 1 Year</option>
                                                <option value="1+ Years">1+ Years</option>
                                                <option value="2+ Years">2+ Years</option>
                                                <option value="3+ Years">3+ Years</option>
                                                <option value="4+ Years">4+ Years</option>
                                                <option value="5+ Years">5+ Years</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="minsalary">Min Salary</label>
                                            <input type="text" class="form-control" id="minsalary" name="minsalary"
                                                placeholder="Min" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="maxsalary">Max Salary</label>
                                            <input type="text" class="form-control" id="maxsalary" name="maxsalary"
                                                placeholder="Max" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="jobtype">Job Type</label>
                                            <select class="custom-select form-control" id="jobtype" name="jobtype">
                                                <option selected="Full-Time">Full-Time</option>
                                                <option value="Part-Time">Part-Time</option>
                                                <option value="C2H">C2H</option>
                                                <option value="Contract">Contract</option>
                                                <option value="Freelance">Freelance</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="wlocation">Work Location</label>
                                            <select class="custom-select form-control" id="wlocation" name="wlocation">
                                                <option selected="In Office">In Office</option>
                                                <option value="Remote">Remote</option>
                                                <option value="Client Location">Client Location</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required="">
                                    <label class="custom-control-label" for="invalidCheck">I have Verified this
                                        Information, and Proceed with Lisiting.</label>
                                    <div class="invalid-feedback">
                                        You must Verify before submitting.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Job Description</h4>
                            <p class="card-title-desc">Add New Job Lisiting. All Fields are Required.</p>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="jobdesc">Job Description</label>
                                    <div class="form-group">
                                        <textarea required="" id="tinyeditor" name="jobdesc" class="form-control"
                                            rows="5" placeholder="minimum 50 words"></textarea>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
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
                                <button type="submit" class="bg-success bw-shadow-green" name="submit"
                                    style="height:60px;width:60px;border-radius:50%;border:none;"><i
                                        class="fa fa-save text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <!-- end container-fluid -->
</div>
</div>
<!-- end page-content-wrapper -->

@endsection
