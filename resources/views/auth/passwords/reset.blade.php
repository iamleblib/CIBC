@extends('layouts.auth')

@section('content')
    <div class="auth-content my-auto">
        <div class="text-center">
            <h5 class="mb-0">Reset Password !</h5>
            <p class="text-muted mt-2">Sign in to continue to {{ env('APP_NAME') }}.</p>
        </div>
        <form class="mt-4 pt-2" action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input value="{{ \Illuminate\Support\Facades\Request::get('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" hidden required>
                <input disabled value="{{ \Illuminate\Support\Facades\Request::get('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Enter Password" required>

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Enter Password Again!" required>

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset Password</button>
            </div>
        </form>
    </div>
@endsection
