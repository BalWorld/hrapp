<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Apply for {{ $job->bw_job_title }}</title>
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Apply for {{ $job->bw_job_title }}" />
    <meta property="og:description" content="Apply for {{ $job->bw_job_title }}" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Apply for {{ $job->bw_job_title }}" />
    <meta name="twitter:description" content="Apply for {{ $job->bw_job_title }}" />
    <meta name="twitter:image" content="" />

    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6058490651f70600114ff5f7&product=inline-share-buttons"
        async="async"></script>
    <link href="/bw-corp/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <style>
    .bw-shadow-green {
        box-shadow: 7px 7px 30px rgb(38 193 149 / 40%);
    }

    .st-disclaimer {
        display: none;
    }

    .st-logo {
        display: none;
    }

    </style>
    <div class="container">

        <section class="pt-4 mt-4">
            <div class="container" data-aos="fade-up" data-aos-duration="600">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-0 text-center">
                            <span class="badge badge-primary mb-2">{{ $job->bw_job_location }},
                                {{ $job->bw_job_wlocation }}</span>
                            <h2 class="mb-2 bal-title-heading">Apply for {{ $job->bw_job_name }}</h2>
                            <span>{{ $job->bw_job_title }} </span><br>
                            <span class="badge badge-dark">
                                {{ $job->bw_job_type }}</span>
                        </div>
                    </div>

                    <div class="col-lg-12 py-4">
                        <div class="card p-4">
                            <div class="">
                                <p><span class="f-600 font-poppins">Job Description</span> <br>
                                    {!!html_entity_decode($job->bw_job_description)!!}
                                </p>
                                <hr>
                                <div class="row no-gutter">
                                    <div class="col-lg-4">
                                        <p><span class="f-600 font-poppins">Primary Skills</span> <br>
                                            {{ $job->bw_job_pskills }}
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p><span class="f-600 font-poppins">Secondary Skills</span> <br>
                                            {{ $job->bw_job_sskills }}
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p><span class="f-600 font-poppins">Optional Skills</span> <br>
                                            {{ $job->bw_job_oskills }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row no-gutter">
                                    <div class="col-lg-4">
                                        <p><span class="f-600 font-poppins">Expirence Required</span>
                                            <br>
                                            {{ $job->bw_job_exp }}
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p><span class="f-600 font-poppins">Salary Offered</span> <br>
                                            {{ $job->bw_job_minsal }} - {{ $job->bw_job_maxsal }}
                                        </p>
                                    </div>
                                </div>
                                <a class="btn btn-success bw-shadow-green text-white" data-toggle="modal"
                                    data-target="#applyjob"> Apply For
                                    {{ $job->bw_job_title }}</a>
                            </div>
                        </div>
                        <div class="sharethis-inline-share-buttons text-left"></div>
                    </div>
                </div>
            </div>
        </section>



        <section class="bw-icon-text bg-light mt-4 mb-4">
            <div class="container">
                <div class="pt-2 pb-4">
                    <h3 class="f-600">Interested to Join?</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bw-icon-text-group">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="bw-icon-text_block">
                                        <div class="bw-icon-text-content">
                                            <h5 class="bw-icon-text-content--title">Visit Us</h5>
                                            <p class="bw-icon-text-content--pragraph">305A, Brigade IRV Centre,
                                                Nallurhalli
                                                Road,<br>Whitefield, Bengaluru, Karnataka 560066</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="bw-icon-text_block">
                                        <div class="bw-icon-text-content">
                                            <h5 class="bw-icon-text-content--title">Contact Us</h5>
                                            <p class="bw-icon-text-content--pragraph">Tel: +918073959200<br>
                                                Email: hr@vncdigital.com</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="applyjob" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="m-0 p-0">
                        <h5 class="modal-title mt-0" id="myModalLabel">Apply for {{ $job->bw_job_title }}</h5>
                        <p class="mt-0 mb-0 d-block small">Please fill in your Details. All fields are Required</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('applyjob')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <input type="text" class="form-control" name="jobid" value="{{ $job->id }}"
                                                required hidden>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="username">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Name" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dob" name="dob"
                                                        placeholder="Date of Birth (DD-MM-YYYY)" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone"
                                                        placeholder="Phone Number" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="phone">Secondary Phone</label>
                                                    <input type="text" class="form-control" id="sphone" name="sphone"
                                                        placeholder="Phone Number" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="current_organisation">Current
                                                        Organisation</label>
                                                    <input type="text" class="form-control" id="current_organisation"
                                                        name="current_organisation" placeholder="Current Organisation"
                                                        value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="location">Current Location</label>
                                                    <input type="text" class="form-control" id="location"
                                                        name="location" placeholder="Current Location" value=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="relocate">Ready to Relocate</label>
                                                    <select class="custom-select form-control" id="relocate"
                                                        name="relocate">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="primary_technology">Primary Technology</label>
                                                    <select class="custom-select form-control" id="primary_technology"
                                                        name="primary_technology">
                                                        <option value="Big Data">Big Data</option>
                                                        <option value="Data Analytics">Data Analytics</option>
                                                        <option value="Data Mining">Data Mining</option>
                                                        <option value="Database Design">Database Design</option>
                                                        <option value="Database Management">Database Management
                                                        </option>
                                                        <option value="Information Security">Information
                                                            Security</option>
                                                        <option value="Cloud/SaaS Services">Cloud/SaaS Services
                                                        </option>
                                                        <option value="Human Resources Software">Human Resources
                                                            Software</option>
                                                        <option value="Web Development">Web Development</option>
                                                        <option value="UI/UX Designer">UI/UX Designer</option>
                                                        <option value="UI/UX Developer">UI/UX Developer</option>
                                                        <option value="Graphics Designer">Graphics Designer
                                                        </option>
                                                        <option value="Support specialist">Support Specialist
                                                        </option>
                                                        <option value="Quality assurance tester">Quality
                                                            Assurance Tester</option>
                                                        <option value="Systems analyst">Systems Analyst</option>
                                                        <option value="Network Engineer">Network Engineer
                                                        </option>
                                                        <option value="Network Security">Network Security
                                                        </option>
                                                        <option value="Back End Developer">Back End Developer
                                                        </option>
                                                        <option value="Front End Developer">Front End Developer
                                                        </option>
                                                        <option value="Full stack Developer">Full stack
                                                            Developer</option>
                                                        <option value="Devops">Devops</option>
                                                        <option value="RPA">RPA</option>
                                                        <option value="PHP Developer">PHP Developer</option>
                                                        <option value="Node.Js Developer">Node.Js Developer
                                                        </option>
                                                        <option value="Angular Developer">Angular Developer
                                                        </option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Architect">Architect</option>
                                                        <option value="Mobile App Developer">Mobile App
                                                            Developer</option>
                                                        <option value="JS Testing">JS Testing</option>
                                                        <option value="API Testing">API Testing</option>
                                                        <option value="Pega Developer">Pega Developer</option>
                                                        <option value="Java Developer">Java Developer</option>
                                                        <option value="Java Middleware Developer">Java
                                                            Middleware Developer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <!-- Not Added to DB-->
                                                <div class="form-group">
                                                    <label for="secondary_skills">Secondary Skills <span
                                                            class="small">[Seperate
                                                            by Commas eg: (skill, skill) ]</span></label>
                                                    <input type="text" class="form-control" id="secondary_skills"
                                                        name="secondary_skills" placeholder="Secondary Skills" value=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="totalexp">Total Experience</label>
                                                    <select class="custom-select form-control" id="totalexp"
                                                        name="totalexp">
                                                        <option value="Fresher">Fresher</option>
                                                        <option value="Less than 1 Year">Less than 1 Year
                                                        </option>
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

                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="relexp">Relevant Experience</label>
                                                    <select class="custom-select form-control" id="relexp"
                                                        name="relexp">
                                                        <option value="Fresher">Fresher</option>
                                                        <option value="Less than 1 Year">Less than 1 Year
                                                        </option>
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
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="ctc">Current CTC</label>
                                                    <input type="text" class="form-control" id="ctc" name="ctc"
                                                        placeholder="Current CTC" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="expected_ctc">Expected CTC</label>
                                                    <input type="text" class="form-control" id="expected_ctc"
                                                        name="expected_ctc" placeholder="Expected CTC" value=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="notice_period">Notice Period</label>
                                                    <select class="custom-select form-control" id="notice_period"
                                                        name="notice_period">
                                                        <option value="Immediate">Immediate</option>
                                                        <option value="Less than 10 Days">Less than 10 Days
                                                        </option>
                                                        <option value="15 Days">15 Days</option>
                                                        <option value="30 Days">30 Days</option>
                                                        <option value="Less than 2 Months">Less than 2 Months
                                                        </option>
                                                        <option value="60 Days">60 Days</option>
                                                        <option value="90 Day">90 Days</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="notice_period_buyable">Notice Period
                                                        Buyable</label>
                                                    <select class="custom-select form-control"
                                                        id="notice_period_buyable" name="notice_period_buyable">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="positiontype">Position Type</label>
                                                    <select class="custom-select form-control" id="positiontype"
                                                        name="positiontype">
                                                        <option value="FTE">FTE</option>
                                                        <option value="C2H">C2H</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="qualification">Highest Qualification</label>
                                                    <input type="text" class="form-control" id="qualification"
                                                        name="qualification" placeholder="Highest Qualification"
                                                        value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="communication">Communication Skills</label>
                                                    <select class="custom-select form-control" id="communication"
                                                        name="communication">
                                                        <option value="Not Enough">Not Enough</option>
                                                        <option value="Moderate">Moderate</option>
                                                        <option value="Average">Average</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Excellent">Excellent</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <hr class="mt-0">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="resume">Upload Resume</label>
                                                    <input type="file" class="form-control pt-1" id="resume"
                                                        name="resume" placeholder="resume" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="pb-2 form-group mb-0">
                                    <input type="submit" class="btn btn-success bw-shadow-green text-white"
                                        value="Apply for Job" name="submit"><i class="fa fa-save text-white"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end container-fluid -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



    <script src="/bw-corp/js/jquery.min.js"></script>
    <script src="/bw-corp/js/bootstrap.bundle.min.js"></script>
    <script>
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>
