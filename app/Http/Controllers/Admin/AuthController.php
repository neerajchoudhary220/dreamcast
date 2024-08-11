<?php

namespace App\Http\Controllers\Admin;

use App\Events\SendLoginEamilToAdminProcess;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthRequest;
use App\Listeners\SendLoginEmailToAdmin;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('admin.auth.login');
    }

    public function store(AuthRequest $request){

        $input = $request->only('email','password');
        $credentials = $input;
        if(!Auth::attempt($credentials,$request->remember)){
            return back()->with($input);
        }
        event(new SendLoginEamilToAdminProcess(Auth::user()));
        return redirect()->route('users');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');

    }

    
}
