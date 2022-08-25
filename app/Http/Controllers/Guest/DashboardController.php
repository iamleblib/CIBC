<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Traits\VerifyPhoneTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    use VerifyPhoneTrait;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.dashboard');
    }

    /**
     * Show the application logout page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function logout(): \Illuminate\Contracts\Support\Renderable
    {
        return view('auth.logout');
    }

    public function verifyPhone()
    {
        // generate token
        if (!auth()->user()->mobile) {
            $token = $this->generateToken();
            $verify = $this->verify(auth()->user()->phone, 'Your verification code is: ' . $token);
            if ($verify) {
                // success
                return view('auth.passwords.phone');
            }
        } else {
            return redirect()->route('home');
        }
    }

    public function verifyPhoneNumber(Request $request)
    {
        $token = $request->num1 . $request->num2 . $request->num3 . $request->num4;
        if ($this->confirmToken($token)) {
            $this->deleteToken($token);
            auth()->user()->update([
                'mobile' => true
            ]);

            return redirect()->route('home');
        } else {
            return redirect()->back()->with('status', 'Invalid Token');
        }
    }

}
