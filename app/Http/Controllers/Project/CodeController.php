<?php

namespace App\Http\Controllers\Project;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Code;

class CodeController extends Controller
{
    public function create(){
        return view('pages.code.create');
    }
    public function store(Request $request){

        $uniqueCode = Str::random(32);
        // $request->validate([
        //     'code'=>"required"
        // ]);
        Code::create([
            'code'=>$uniqueCode
        ]);
        return view('pages.code.write-code');
    }
    public function check($code){
        $result=Code::where('code',$code)->first();
        if($result->count() > 0){
            // $records =Code::where('user_id', null)->get();
            if(is_null($result->user_id)){
                return view('Auth.register',compact('code'));
            }
            else{
                return view('pages.code.write-code');
            }
        }
    }
    // public function check(Request $request){
    //         $request->validate([
    //         'code'=>"required"
    //     ]);
    //     $code = $request->code;
    //     if(Code::where('code',$code)->first()){
    //         return view('Auth.register',compact('code'));
    //     }
    //     return back()->with('error','this code is invalid');
    // }
}
