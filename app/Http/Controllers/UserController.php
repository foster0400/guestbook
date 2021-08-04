<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
            'name' => ['required','string', 'max:255'],
        ]);

        User::where('id',Auth()->user()->id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect()->back();
    }
}
