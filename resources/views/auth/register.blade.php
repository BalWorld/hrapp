<!doctype html>
<html lang="en">

<!-- 

* Welcome to Laradmin - Developed by Bal Sankar

* Interested in this Application
* visit our Github www.github.com/balworld/bw-laradmin
* our Website www.balworld.in
* Email us on info@balworld.in

* Licensed under GNU General Public License v3.0
* Developed by Bal Sankar. Made with Love in Thissur.

-->

<head>
    <meta charset="utf-8" />
    <title>Register - HR App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Design and Developed by Bal Sankar" name="description" />
    <meta content="Bal Sankar" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="/bw-corp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/bw-corp/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/bw-corp/css/bw-corp.css?v1.2.1" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-12 col-md-6 col-xl-8 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-12 col-md-6 col-xl-4 bg-white">
                <div class="login d-flex align-items-center py-5">

                    <!-- Register content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-10 mx-auto">
                                <h1 class="f-600">Register to HR App</h1>
                                <p class="text-muted mb-4">Register using your Email Address</p>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                                            autocomplete="name" autofocus placeholder="Name"
                                            class="form-control @error('name') is-invalid @enderror border-0 shadow-sm px-4">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="email" type="email" placeholder="Work Email Address" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            class="form-control @error('email') is-invalid @enderror border-0 shadow-sm px-4">
                                        <input id="role" type="number" name="role" value="0" hidden>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password" type="password" placeholder="Password" name="password"
                                            required autocomplete="new-password"
                                            class="form-control @error('password') is-invalid @enderror border-0 shadow-sm px-4">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password-confirm" type="password" placeholder="Confirm Password"
                                            name="password_confirmation" required autocomplete="new-password"
                                            class="form-control border-0 shadow-sm px-4">
                                    </div>

                                    <button type="submit" class="btn btn-primary mb-2 shadow-sm">Register</button>
                                    <hr>
                                    <div class="text-center d-flex justify-content-between mt-2">
                                        <p>Already a User ? <a href="/login" class="text-muted">
                                                <u>Login Here</u></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
</body>

</html>
