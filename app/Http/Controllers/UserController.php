<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function view(){
        $user = Auth()->user();
        return view('profile',['user'=>$user,]);
    }
    public function update(Request $request){
        $this->validate($request ,[
            'address' => ['string', 'max:70'],
        ]);
        if(Auth()->user()->name != $request->name){
            $this->validate($request ,[
                'address' => ['required','string', 'max:255'],
            ]);
        }
        return redirect()->back();
    }
}
