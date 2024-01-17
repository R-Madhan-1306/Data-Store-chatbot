<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class logincontroller extends Controller
{
    //
    public function index(Request $req){

        return view('login');
    }
    public function signup(Request $req){

        return view('signup');
    }
    //
    public function login(Request $request){

        $validData = $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $email = $validData['email'];
                        ///otp_changes_end
        $userCredential = $request->only('email','password');
        $userData = User::where('email',$request->email)->first();
        
        if(Auth::attempt($validData)){
            return redirect('/profile');
        }
        else{
            dd('error');
        }

    }
    public function register(Request $req){

        $user=new User();
        $user->name=$req->name;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        auth()->login($user);
        echo 'success';
        
    }
    public function logout(){
        Session()->flush();
         auth()->logout();
        return redirect('/');
    }
}
