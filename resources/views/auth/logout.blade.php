@extends('layouts.auth')

@section('content')
    <div class="auth-content my-auto">
        <div class="text-center">
            <div class="avatar-xl mx-auto">
                <div class="avatar-title bg-soft-light text-primary h1 rounded-circle">
                    <i class="bx bxs-user"></i>
                </div>
            </div>

            <div class="mt-4 pt-2">
                <h5>You are Logged Out</h5>
                <p class="text-muted font-size-15">Thank you for using <span class="fw-semibold text-dark">{{ env('APP_NAME') }}</span></p>
                <div class="mt-4">
                    <a href="{{ route('login') }}" class="btn btn-primary w-100 waves-effect waves-light">Sign In</a>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <p class="text-muted mb-0">Don't have an account ? <a href="{{ route('register') }}"
                                                                  class="text-primary fw-semibold"> Signup</a> </p>
        </div>
    </div>
@endsection
