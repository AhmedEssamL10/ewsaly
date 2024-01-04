<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PDO;

class VerificationController extends Controller
{
    public function sendCode(Request $request)
    {
        //get user
        $authUser = Auth::user();
        //generate code
        $code = rand(10000, 99999);
        //generate exporation date
        // dd(date('Y-m-d H:i:s'));
        $expirationDate =  date('Y-m-d H:i:s', strtotime('+2 minutes')); //date of now + two mentues
        //save code and expiration date in database
        $user =  User::find($authUser->id);
        $user->code = $code;
        $user->code_expired_at = $expirationDate;
        $user->save();
        //send mail
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
    public function index(){
        return view('Auth.send-code');
    }
}
