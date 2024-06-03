@extends('layouts.plain')

@section('title', 'Reset Password')

@section('content')
<div class="row">
    <div class="mdl-content row clearfix justify-content-center mt-5" bis_skin_checked="1">
        <div class="card col-lg-4 col-md-12 col-sm-12 feature-block m-3 rounded-5" bis_skin_checked="1">
            <div class="card-body text-left pb-5" bis_skin_checked="1">
                <!-- Display Session Status -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <h2 class="mt-4 mb-1 text-center"><b class="mnclr">Reset Password</b></h2>
                    <p class="text-center mt-4 mb-4">Give us the email you signed up with, and we'll send you a link to securely reset your password.</p>
                    <div data-mdb-input-init="" class="form-outline mb-4" bis_skin_checked="1">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" id="form2Example1" name="email" class="form-control" value="{{ old('email') }}">
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('plain-specific-script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var statusMessage = document.querySelector('.alert-success');
        if (statusMessage) {
            setTimeout(function () {
                statusMessage.style.display = 'none';
            }, 5000); // Adjust the time as needed
        }
    });
</script>
@endsection
