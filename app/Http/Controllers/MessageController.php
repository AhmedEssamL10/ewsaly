<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){
          $request->validate([
            'phone'=>"required",
            'content'=>'required'
        ]);
       $user= Code::where('code',$request->code)->first();
        Message::create([
            'content'=>$request->content,
            'phone'=>$request->phone,
            'user_id'=>$user->user_id
        ]);
        return back();
    }
}
