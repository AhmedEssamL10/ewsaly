<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Code;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'car_model'=>'required',
            'car_color'=>'required',
            'phone'=>'required',
            'plate_number'=>'required',
            'password_confirmation'=>'required'
        ]);
    $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'car_model' => $request->car_model,
            'car_color' => $request->car_color,
            'phone' => $request->phone,
            'plate_number' => $request->plate_number,
            'password' => Hash::make($request->password)
        ]);
        Code::where('code',$request->code)->update([
            'user_id'=>$user->id
        ]);
       return back()->with('success','the user is created success');
    }
}
