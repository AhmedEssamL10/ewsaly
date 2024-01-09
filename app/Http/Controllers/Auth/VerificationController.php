<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDO;

class VerificationController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('Auth.send-code', compact('user'));
    }
    public function sendCode(Request $request)
    {
        $authUser = Auth::user();
        $code = rand(10000, 99999);
        //generate exporation date
        $expirationDate =  date('Y-m-d H:i:s', strtotime('+2 minutes')); //date of now + two mentues
        //save code and expiration date in database
        $user =  User::find($authUser->id);
        $user->code = $code;
        $user->code_expired_at = $expirationDate;
        $user->save();
        //send mail
        Mail::to($user->email)->send(new SendCode($user));
        // Mail::to($user->email)->send(new EmailVerificationCode($user));
        //return user data
        return view('Auth.check-code');
    }
    public function checkCode(Request $request)
    {
        //token
        $authUser = Auth::user();
        //code
        //validation
        $request->validate([
            'code' => 'required|digits:5|exists:users'
        ]);
        $user =  User::find($authUser->id);
        //check code
        if ($user->code == $request->code && $user->code_expired_at > date('Y-m-d H:i:s')) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->save();
        } else {
            //update email verified at
            return 'fail';
        }
        return redirect(route('home'));
    }
}
