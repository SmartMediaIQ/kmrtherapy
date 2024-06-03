@extends('layouts.plain')

@section('title', 'Login')

@section('content')
{{-- <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
            <div class="bg-primary-subtle">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-4">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Sign in to continue to Healthsherpa.</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="auth-logo">
                    <a href="index.html" class="auth-logo-light">
                        <div class="avatar-md profile-user-wid mb-4">
                            <span class="avatar-title rounded-circle bg-light">
                                <img src="{{ asset('assets/images/logo-light.svg') }}" alt="" class="rounded-circle" height="34">
                            </span>
                        </div>
                    </a>

                    <a href="index.html" class="auth-logo-dark">
                        <div class="avatar-md profile-user-wid mb-4">
                            <span class="avatar-title rounded-circle bg-light">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                            </span>
                        </div>
                    </a>
                </div>
                <div class="p-2">
                    <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            @error('email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            @if(session('error'))
                            <span class="error">{{ session('error') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group auth-pass-inputgroup">
                                <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password">
                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                            </div>
                            @error('password')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-check">
                            <label class="form-check-label" for="remember-check">
                                Remember me
                            </label>
                        </div>

                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row" bis_skin_checked="1">
    <div class="mdl-content row clearfix justify-content-center mt-5" bis_skin_checked="1">
        <div class="card col-lg-4 col-md-12 col-sm-12 feature-block m-3 rounded-5" bis_skin_checked="1">
            <div class="card-body text-left pb-5" bis_skin_checked="1">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <h2 class="mt-4 mb-5 text-center"><b class="mnclr">Sign into your account</b></h2>
                    <div data-mdb-input-init="" class="form-outline mb-4" bis_skin_checked="1">
                        <label class="form-label" for="form2Example1">Email address</label>
                      <input type="email" id="form2Example1" name="email" class="form-control">
                    </div>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @if(session('error'))
                        <span class="error">{{ session('error') }}</span>
                    @endif

                    <div data-mdb-input-init="" class="form-outline mb-4" bis_skin_checked="1">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" name="password" class="form-control">
                        @error('password')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-primary btn-block mb-4 d-block w-100 hs-btn p-3">Sign in</button>
                    <div class="row mb-4" bis_skin_checked="1">
                      <div class="col text-center" bis_skin_checked="1">
                        <a href="{{ route('password.request') }}" class="mnclr">Forgot password?</a>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
