<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Auth;
use App\User_role;
use App\Pic;

class sessionController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    public function index()
    {
        $data = Pic::all();
        return view('sessions.create',['data'=>$data]);
    }

    public function create()
    {    
        return view('sessions.create',compact('Pic'));
    }
    
    public function store()
    {
        // Attempt to authenticate the user.
        $email = request('email');
        $password = request('password');
        $role_id=request('role_id');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/home');  
            
        }
        
        else{
               return back()->withErrors([
               'message' => 'Email & password tidak cocok. silahkan ulangi!'
            ]);  
       }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
