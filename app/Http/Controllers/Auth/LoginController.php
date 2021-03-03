<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
       ]);

       if(!auth::attempt($request->only('username','password'))){
            return back()->with('status', 'Invalid Login Details');
        }

        return redirect()->route('main');
    }
}
