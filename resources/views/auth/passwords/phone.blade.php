@extends('layouts.auth')

@section('content')
    <div class="auth-content my-auto">
        <div class="text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="avatar-lg mx-auto">
                <div class="avatar-title rounded-circle bg-light">
                    <i class="bx bxs-phone h2 mb-0 text-primary"></i>
                </div>
            </div>
            <div class="p-2 mt-4">

                <h4>Verify your phone number</h4>
                <p class="mb-5">Please enter the 4 digit code sent to <span class="fw-bold">{{ auth()->user()->phone }}</span></p>

                <form method="post" action="{{ route('verify.phone.number') }}">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                <input type="text"
                                       name="num1"
                                       class="form-control form-control-lg text-center two-step"
                                       maxLength="1"
                                       data-value="1"
                                       id="digit1-input">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                <input type="text"
                                       name="num2"
                                       class="form-control form-control-lg text-center two-step"
                                       maxLength="1"
                                       data-value="2"
                                       id="digit2-input">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                <input type="text"
                                       name="num3"
                                       class="form-control form-control-lg text-center two-step"
                                       maxLength="1"
                                       data-value="3"
                                       id="digit3-input">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                <input type="text"
                                       name="num4"
                                       class="form-control form-control-lg text-center two-step"
                                       maxLength="1"
                                       data-value="4"
                                       id="digit4-input">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Confirm</button>
                    </div>
                </form>


            </div>

        </div>

        <div class="mt-5 text-center">
            <p class="text-muted mb-0">Didn't receive an SMS ?
                <a href="{{ route('verify.phone') }}" class="text-primary fw-semibold" hidden id="resend">Resend</a> </p>

            <p id="demo"></p>
{{--            <script>--}}
{{--                // Set the date we're counting down to--}}
{{--                let countDownDate = new Date("{{ auth()->user()->token->updated_at->addMinutes(5)}}").getTime();--}}

{{--                // Update the count down every 1 second--}}
{{--                let x = setInterval(function() {--}}

{{--                    // Get today's date and time--}}
{{--                    let now = new Date().getTime();--}}

{{--                    // Find the distance between now and the count down date--}}
{{--                    let distance = countDownDate - now;--}}

{{--                    // Time calculations for days, hours, minutes and seconds--}}
{{--                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);--}}

{{--                    // Output the result in an element with id="demo"--}}
{{--                    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";--}}

{{--                    // If the count down is over, write some text--}}
{{--                    if (distance < 0) {--}}
{{--                        clearInterval(x);--}}
{{--                        document.getElementById("demo").innerHTML = "EXPIRED";--}}
{{--                    }--}}
{{--                }, 1000);--}}
{{--            </script>--}}

        </div>
    </div>
@endsection
