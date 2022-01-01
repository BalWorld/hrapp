@extends('layout')
@section('content')
<!-- Page-Title -->

<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Edit Resume of {{ $jobresponse->name }}</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">HR App</a></li>
                    <li class="breadcrumb-item active">Resume - {{ $jobresponse->id }}</li>
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

        <form action="{{route('response.update',$jobresponse->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h4 class="header-title">Add a New Resume</h4>
                            <p class="card-title-desc">Add New Resume. All Fields are Required.
                            </p>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="username">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            value="{{ $jobresponse->name }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" value="{{ $jobresponse->email }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone Number" value="{{ $jobresponse->phone }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Secondary Phone</label>
                                        <input type="text" class="form-control" id="sphone" name="sphone"
                                            placeholder="Phone Number" value="{{ $jobresponse->sphone }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="primary_technology">Primary Technology</label>
                                        <select class="custom-select form-control" id="primary_technology"
                                            name="primary_technology">
                                            <option value="{{ $jobresponse->primary_technology }}">Selected :
                                                {{ $jobresponse->primary_technology }}</option>
                                            <option value="Big Data">Big Data</option>
                                            <option value="Data Analytics">Data Analytics</option>
                                            <option value="Data Mining">Data Mining</option>
                                            <option value="Database Design">Database Design</option>
                                            <option value="Database Management">Database Management</option>
                                            <option value="Information Security">Information Security</option>
                                            <option value="Cloud/SaaS Services">Cloud/SaaS Services</option>
                                            <option value="Human Resources Software">Human Resources Software</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="UI/UX Designer">UI/UX Designer</option>
                                            <option value="UI/UX Developer">UI/UX Developer</option>
                                            <option value="Graphics Designer">Graphics Designer</option>
                                            <option value="Support specialist">Support Specialist</option>
                                            <option value="Quality assurance tester">Quality Assurance Tester</option>
                                            <option value="Systems analyst">Systems Analyst</option>
                                            <option value="Network Engineer">Network Engineer</option>
                                            <option value="Network Security">Network Security</option>
                                            <option value="Back End Developer">Back End Developer</option>
                                            <option value="Front End Developer">Front End Developer</option>
                                            <option value="Full stack Developer">Full stack Developer</option>
                                            <option value="Devops">Devops</option>
                                            <option value="RPA">RPA</option>
                                            <option value="PHP Developer">PHP Developer</option>
                                            <option value="Node.Js Developer">Node.Js Developer</option>
                                            <option value="Angular Developer">Angular Developer</option>
                                            <option value="React.Js Developer">React.Js Developer</option>
                                            <option value="React Native Developer">React Native Developer</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Architect">Architect</option>
                                            <option value="Mobile App Developer">Mobile App Developer</option>
                                            <option value="JS Testing">JS Testing</option>
                                            <option value="API Testing">API Testing</option>
                                            <option value="Pega Developer">Pega Developer</option>
                                            <option value="Java Developer">Java Developer</option>
                                            <option value="Java Middleware Developer">Java Middleware Developer</option>
                                            <option value="Flutter Developer">Flutter</option>
                                            <option value="QA - Automation Selenium Java">QA - Automation Selenium Java
                                            </option>
                                            <option value="QA - Automation Selenium C#">QA - Automation Selenium C#
                                            </option>
                                            <option value="Performance testing - Load runner">Performance testing - Load
                                                runner</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <!-- Not Added to DB-->
                                    <div class="form-group">
                                        <label for="secondary_skills">Secondary Skills</label>
                                        <input type="text" class="form-control" id="secondary_skills"
                                            name="secondary_skills" placeholder="Secondary Skills"
                                            value="{{ $jobresponse->secondary_skills }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="totalexp">Total Experience</label>
                                        <select class="custom-select form-control" id="totalexp" name="totalexp">
                                            <option value="{{ $jobresponse->totalexp }}">Selected :
                                                {{ $jobresponse->totalexp }}</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="Less than 1 Year">Less than 1 Year</option>
                                            <option value="1+ Years">1+ Years</option>
                                            <option value="2+ Years">2+ Years</option>
                                            <option value="3+ Years">3+ Years</option>
                                            <option value="4+ Years">4+ Years</option>
                                            <option value="5+ Years">5+ Years</option>
                                            <option value="6+ Years">6+ Years</option>
                                            <option value="7+ Years">7+ Years</option>
                                            <option value="8+ Years">8+ Years</option>
                                            <option value="9+ Years">9+ Years</option>
                                            <option value="10+ Years">10+ Years</option>
                                            <option value="11+ Years">11+ Years</option>
                                            <option value="12+ Years">12+ Years</option>
                                            <option value="13+ Years">13+ Years</option>
                                            <option value="14+ Years">14+ Years</option>
                                            <option value="15+ Years">15+ Years</option>
                                            <option value="16+ Years">16+ Years</option>
                                            <option value="17+ Years">17+ Years</option>
                                            <option value="18+ Years">18+ Years</option>
                                            <option value="19+ Years">19+ Years</option>
                                            <option value="20+ Years">20+ Years</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="relexp">Relevant Experience</label>
                                        <select class="custom-select form-control" id="relexp" name="relexp">
                                            <option value="{{ $jobresponse->relexp }}">Selected :
                                                {{ $jobresponse->relexp }}</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="Less than 1 Year">Less than 1 Year</option>
                                            <option value="1+ Years">1+ Years</option>
                                            <option value="2+ Years">2+ Years</option>
                                            <option value="3+ Years">3+ Years</option>
                                            <option value="4+ Years">4+ Years</option>
                                            <option value="5+ Years">5+ Years</option>
                                            <option value="6+ Years">6+ Years</option>
                                            <option value="7+ Years">7+ Years</option>
                                            <option value="8+ Years">8+ Years</option>
                                            <option value="9+ Years">9+ Years</option>
                                            <option value="10+ Years">10+ Years</option>
                                            <option value="11+ Years">11+ Years</option>
                                            <option value="12+ Years">12+ Years</option>
                                            <option value="13+ Years">13+ Years</option>
                                            <option value="14+ Years">14+ Years</option>
                                            <option value="15+ Years">15+ Years</option>
                                            <option value="16+ Years">16+ Years</option>
                                            <option value="17+ Years">17+ Years</option>
                                            <option value="18+ Years">18+ Years</option>
                                            <option value="19+ Years">19+ Years</option>
                                            <option value="20+ Years">20+ Years</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="ctc">Current CTC</label>
                                        <input type="text" class="form-control" id="ctc" name="ctc"
                                            placeholder="Current CTC" value="{{ $jobresponse->ctc }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="expected_ctc">Expected CTC</label>
                                        <input type="text" class="form-control" id="expected_ctc" name="expected_ctc"
                                            placeholder="Expected CTC" value="{{ $jobresponse->expected_ctc }}"
                                            required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="notice_period">Notice Period</label>
                                        <select class="custom-select form-control" id="notice_period"
                                            name="notice_period">
                                            <option value="{{ $jobresponse->notice_period }}">Selected :
                                                {{ $jobresponse->notice_period }}</option>
                                            <option value="Immediate">Immediate</option>
                                            <option value="Less than 10 Days">Less than 10 Days</option>
                                            <option value="15 Days">15 Days</option>
                                            <option value="30 Days">30 Days</option>
                                            <option value="Less than 2 Months">Less than 2 Months</option>
                                            <option value="60 Days">60 Days</option>
                                            <option value="90 Day">90 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="notice_period_buyable">Notice Period Buyable</label>
                                        <select class="custom-select form-control" id="notice_period_buyable"
                                            name="notice_period_buyable">
                                            <option value="{{ $jobresponse->notice_period_buyable }}">Selected :
                                                {{ $jobresponse->notice_period_buyable }}</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="positiontype">Position Type</label>
                                        <select class="custom-select form-control" id="positiontype"
                                            name="positiontype">
                                            <option value="{{ $jobresponse->positiontype }}">Selected :
                                                {{ $jobresponse->positiontype }}</option>
                                            <option value="FTE">FTE</option>
                                            <option value="C2H">C2H</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="current_organisation">Current Organisation</label>
                                        <input type="text" class="form-control" id="current_organisation"
                                            name="current_organisation" placeholder="Current Organisation"
                                            value="{{ $jobresponse->current_organisation }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <hr class="mt-0">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="client">Client</label>
                                        <select class="custom-select form-control" id="client" name="client">
                                            <option value="{{ $jobresponse->client }}">Selected :
                                                {{ $jobresponse->client }}
                                            </option>
                                            <option value="HM">HM</option>
                                            <option value="ITC">ITC</option>
                                            <option value="Terralogic">Terralogic</option>
                                            <option value="ATCS">ATCS</option>
                                            <option value="Indium">Indium</option>
                                            <option value="BCT">BCT</option>
                                            <option value="Cardinality">Cardinality</option>
                                            <option value="Phasezero">Phasezero</option>
                                            <option value="Karsun">Karsun</option>
                                            <option value="V-Soft">V-Soft</option>
                                            <option value="Koo">Koo</option>
                                            <option value="Centrico">Centrico</option>
                                            <option value="Atos Syntel">Atos Syntel</option>
                                            <option value="Social91">Social91</option>
                                            <option value="Internal">Internal</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->


                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Upload Resume and Basic Details</h4>
                            <p class="card-title-desc">Upload Candidate resume and Basic infos
                            </p>
                            <!-- 
                        <form method="POST" enctype="multipart/form-data">
                            @csrf -->
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            placeholder="Date of Birth (DD-MM-YYYY)" value="{{ $jobresponse->dob }}"
                                            required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="location">Current Location</label>
                                        <input type="text" class="form-control" id="location" name="location"
                                            placeholder="Current Location" value="{{ $jobresponse->location }}"
                                            required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="relocate">Ready to Relocate</label>
                                        <select class="custom-select form-control" id="relocate" name="relocate">
                                            <option value="{{ $jobresponse->email }}">Selected :
                                                {{ $jobresponse->relocate }}
                                            </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="qualification">Highest Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification"
                                            placeholder="Highest Qualification"
                                            value="{{ $jobresponse->qualification }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="communication">Communication Skills</label>
                                        <select class="custom-select form-control" id="communication"
                                            name="communication">
                                            <option value="{{ $jobresponse->communication }}">Selected :
                                                {{ $jobresponse->communication }}</option>
                                            <option value="Not Enough">Not Enough</option>
                                            <option value="Moderate">Moderate</option>
                                            <option value="Average">Average</option>
                                            <option value="Good">Good</option>
                                            <option value="Excellent">Excellent</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- end row -->
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
        <!-- end container-fluid -->
    </div>
</div>
<!-- end page-content-wrapper -->
@endsection
