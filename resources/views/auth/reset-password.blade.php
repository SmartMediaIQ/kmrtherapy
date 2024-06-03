@extends('layouts.plain')

@section('title', 'Reset Password')

@section('content')
{{-- <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
            <div class="bg-primary-subtle">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-4">
                            <h5 class="text-primary">Reset Password</h5>
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
                    <form class="form-horizontal" action="{{ route('password.update') }}" method="POST">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ request()->get('email') }}" readonly>
                            @error('email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            @if(session('error'))
                            <span class="error">{{ session('error') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                            @error('password')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter password">
                            @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Reset Password</button>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Back To Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="mdl-content row clearfix justify-content-center mt-5" bis_skin_checked="1">
        <div class="card col-lg-4 col-md-12 col-sm-12 feature-block m-3 rounded-5" bis_skin_checked="1">
            <div class="card-body text-left pb-5" bis_skin_checked="1">
                {{-- <form action="{{ route('password.email') }}" method="POST"> --}}
                    {{-- @csrf --}}
                    {{-- <h2 class="mt-4 mb-1 text-center"><b class="mnclr">Reset Password</b></h2>
                    <p class="text-center mt-4 mb-4">Give us the email you signed up with, and we'll send you a link to securely reset your password.</p>
                    <div data-mdb-input-init="" class="form-outline mb-4" bis_skin_checked="1">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" id="form2Example1" name="email" class="form-control">
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                        @if(session('error'))
                        <span class="error">{{ session('error') }}</span>
                        @endif
                    </div>
                    <button type="submit" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-primary btn-block mb-4 d-block w-100 hs-btn p-3">Reset Password</button>

                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Back To Login</a>
                    </div> --}}
                {{-- </form> --}}
                <form class="form-horizontal" action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <h2 class="mt-4 mb-1 text-center"><b class="mnclr">Reset Password</b></h2>
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ request()->get('email') }}" readonly>
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                        @if(session('error'))
                        <span class="error">{{ session('error') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        @error('password')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter password">
                        @error('password_confirmation')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Reset Password</button>
                    </div>
                </form>

                    {{-- <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Back To Login</a>
                    </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
