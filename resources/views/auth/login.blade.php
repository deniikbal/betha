@extends('layouts.guest.app')

@section('content')
    {{-- <div class="media-body align-items-center d-none d-lg-flex">
        <div class="mx-wd-600">
            <img src="https://via.placeholder.com/1260x950" class="img-fluid" alt="">
        </div>
        <div class="pos-absolute b-0 l-0 tx-12 tx-center">
            Workspace design vector is created by <a href="https://www.freepik.com/pikisuperstar"
                target="_blank">pikisuperstar (freepik.com)</a>
        </div>
    </div><!-- media-body --> --}}
    <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
        <div class="wd-100p">
            <h3 class="tx-color-01 mg-b-5">Log In</h3>
            <p class="tx-color-03 tx-16 mg-b-40 mb-3">Welcome back! Please login to continue.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="yourname@yourmail.com" name="email" autofocus value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between mg-b-5">
                        <label class="mg-b-0-f">Password</label>
                        <a href="" class="tx-13">Forgot password?</a>
                    </div>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-brand-02 btn-block">Sign In</button>
            </form>
            <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="{{ route('register') }}">Register</a></div>
        </div>
    </div><!-- sign-wrapper -->
@endsection
