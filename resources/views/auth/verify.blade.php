@extends('layouts.auth')

@section('content')
    <div class="auth-content my-auto">
        <div class="text-center">
            <div class="avatar-lg mx-auto">
                <div class="avatar-title rounded-circle bg-light">
                    <i class="bx bxs-envelope h2 mb-0 text-primary"></i>
                </div>
            </div>
            <div class="p-2 mt-4">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div> <br>
                @endif

                <h4>Verify your email</h4>
                <p>We have sent you a verification email to <span class="fw-bold">{{ auth()->user()->email }}</span>, Please check it</p>
            </div>
        </div>
        <div class="mt-5 text-center">
            <p class="text-muted mb-0">Didn't receive an email ?
                <a class="text-primary fw-semibold" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('resend').submit();"> Resend
                </a>
            </p>
        </div>
    </div>
    <form id="resend" action="{{ route('verification.resend') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection
