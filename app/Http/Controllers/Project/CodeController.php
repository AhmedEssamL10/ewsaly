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
}
