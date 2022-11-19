<?php

namespace App\Http\Controllers\Auth;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;

    public function showRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetPassword(Request $request)
    {

        $this->validate($request,
        [
            'email' => 'required|email',
        ]);

        $exist = User::where('email' , $request->email)->count();
        if($exist > 0)
        {
            $eightRandomDigit = rand(10000000,99999999);
            $hash_password = Hash::make($eightRandomDigit);

            //Make Reset Password
            User::where('email', $request->email)->update([
                'password' => $hash_password
            ]);

            // -----------------------------------------------------------------------

                // Start Send Email To Customer

                $details = [
                    'email' => $request->email,
                    'password' => $eightRandomDigit
                ];

                try{
                    Mail::send(
                        'emails.user.forget',
                        [
                        'data' => $details
        
                        ],
                        function ($message) use ($request) {
                            $message->to($request->email);
                            $message->subject('Reset Password');
                        }
                    );
                    } catch (Throwable $e) {
                                    
                    }

                // End Send Email To Customer
            // ----------------------------------------------------------------------
            
            return redirect()->back()->with('success', 'Please check your email we have sent you a new password, Don`t forget to check your junk folder too');
        }
        else 
        {
            return redirect()->back()->with('message', 'This Email is not register with us!!');
        }
    }
}
