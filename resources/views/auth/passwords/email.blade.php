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
                            <h1 class="f-600">Password</h1>
                            <p class="text-muted mb-4">A Password reset link will be Sent to your Registered Email
                                Address.</p>

                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror border-0 px-4 shadow-sm"
                                        name="email" value="{{ old('email') }}" placeholder="Email Address" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <small>{{ $message }}</small>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Send Password Reset Link</button>
                            </form>
                            <hr>
                            <div class="text-center d-flex justify-content-between mt-4">
                                <p>Got your memory back? <a class="text-muted" href="/login">
                                        <u>Login Here</u></a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

@include('main/layouts/footer')
