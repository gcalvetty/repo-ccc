<?php

namespace sis_ccc\Http\Controllers\Auth;

use sis_ccc\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;

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

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }    
    /*
     * --- Cambiar Contraseña via email
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
        // ---
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );
        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponseGUI($response,$request)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }
    
    protected function sendResetLinkResponseGUI($response,$request)
    {
        
        return redirect()->route('password.reset', ['token' => session('tokenGUI'), 'email' => $request->email]);        
        //return redirect()->with('status', trans($response));
    }
}
