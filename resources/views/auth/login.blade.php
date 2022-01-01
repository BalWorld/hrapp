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
    <title>Login - HR App</title>
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

                    <!-- Login-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-10 mx-auto">
                                <h1 class="f-600">Login to HR App</h1>
                                <p class="text-muted mb-4">Login using your Work Email Address</p>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror border-0 shadow-sm px-4"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Email Address" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror border-0 shadow-sm px-4"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="remember" type="checkbox" checked class="custom-control-input"
                                            type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember" class="custom-control-label">Remember password</label>

                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Login</button>

                                    @if (Route::has('password.request'))
                                    <!-- <a class="d-inline-block pl-lg-2 pt-2 text-dark"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                                    @endif
                                </form>
                                <hr>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    <p>New User? <a class="text-muted" href="/register">
                                            <u>Signup Here</u></a></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
</body>

</html>
