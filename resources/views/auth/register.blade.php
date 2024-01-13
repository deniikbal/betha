@extends('layouts.guest.app')

@section('content')
    <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
        <div class="pd-t-20 wd-100p">
            <h4 class="tx-color-01 mg-b-3">Create New Account</h4>
            <p class="tx-color-03 tx-16 mb-3">It's free to register and only takes a minute.</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group mb-2">
                    <label>Name</label>
                    <input type="text" name="name" autofocus class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter your Name" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label>Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter Your Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <div class="d-flex justify-content-between mg-b-5">
                        <label class="mg-b-0-f">Password</label>
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <div class="d-flex justify-content-between mg-b-5">
                        <label class="mg-b-0-f">Confirm Password</label>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        autocomplete="new-password">
                </div>
                <div class="form-group tx-12">
                    By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy
                    statement.
                </div><!-- form-group -->

                <button type="submit" class="btn btn-brand-02 btn-block">Register</button>
            </form>
            <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="{{ route('login') }}l">Log In</a></div>
        </div>
    </div><!-- sign-wrapper -->
@endsection
