<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        return 'success';
    }
}
