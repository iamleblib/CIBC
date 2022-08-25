@extends('layouts.auth')

@section('content')
    <div class="auth-content my-auto">
        <div class="text-center">
            <h5 class="mb-0">Welcome Bank !</h5>
            <p class="text-muted mt-2">Sign in to continue to {{ env('APP_NAME') }}.</p>
        </div>
        <form class="mt-4 pt-2" action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter E-mail" required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="mb-3">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <label class="form-label">Password</label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="">
                            <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Enter Password" required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="invalid-feedback">
                        Please Enter Password
                    </div>
                </div>

            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-check">
                        <input name="remember" class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember-check">
                            Remember me
                        </label>
                    </div>
                </div>

            </div>
            <div class="mb-3">
                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
            </div>
        </form>

        <div class="mt-4 pt-2 text-center">
            <div class="signin-other-title">
                <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
            </div>

            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="javascript:void()"
                       class="social-list-item bg-primary text-white border-primary">
                        <i class="mdi mdi-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void()"
                       class="social-list-item bg-info text-white border-info">
                        <i class="mdi mdi-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void()"
                       class="social-list-item bg-danger text-white border-danger">
                        <i class="mdi mdi-google"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mt-5 text-center">
            <p class="text-muted mb-0">Don't have an account ? <a href="{{ route('register') }}"
                                                                  class="text-primary fw-semibold"> Signup Now </a> </p>
        </div>
    </div>
@endsection
