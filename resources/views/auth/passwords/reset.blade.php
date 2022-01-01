@include('main/layouts/header')

<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6">
            <div class="login d-flex align-items-center py-5">

                <!-- Login-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h1 class="f-600">Reset Password</h1>
                            <p class="text-muted mb-4">Login using your Email Address or Linkedin</p>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror border-0 shadow-sm px-4"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <small>{{ $message }}</small>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror border-0 shadow-sm px-4"
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small>{{ $message }}</small>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password-confirm" type="password"
                                        class="form-control border-0 shadow-sm px-4" name="password_confirmation"
                                        required autocomplete="new-password">
                                </div>

                                <button type="submit" class="btn btn-primary mb-2">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End -->

        </div>
    </div><!-- End -->

</div>
</div>

@include('main/layouts/footer')
