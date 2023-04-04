<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class LoginController extends Controller
{
    //
    public function show(){
        // dd('hello');
        return view('login');
    }
    public function login(LoginRequest $request){
        $credentials = $request->except('_token');

        if(!Auth::validate($credentials)){
            return redirect()->to('login');
        }

        // if(Auth::attempt($credentials)){
        //     return redirect()->intended();
        // }
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if (Gate::allows('isAdmin', $user)) {
                return redirect()->route('admin.index');
            }
            else if(Gate::allows('isUser', $user)){
                return redirect()->route('index');
            }
        }
        
    }
}