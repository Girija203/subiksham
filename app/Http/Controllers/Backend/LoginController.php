<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function dashboard(){

        $galleryCount = Gallery::count();
        $courseCount = Course::count();
        $userCount=User::count();

        return view('backend.dashboard',compact('galleryCount','courseCount','userCount'));
    }


    public function login(){
       
        if(Auth::check()){

            return redirect()->route('dashboard');
        }

        return view('backend.login');
    }

    public function postLogin(Request $request)
    {
        
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {

            if (auth()->user()->status == '1') {
                return (redirect(route('dashboard')))->with('success', 'You have Successfully loggedin');
            } else {
                return redirect((route('login')))->with('error', "Sorry Your Account is Blocked,You Contact Admin");
            }
        }
          
            return redirect()->route('login')->with('error', 'Invalid credentials');
        
    }
    public function logout()
    {
        Auth::logout();

        // If you want to redirect the user after logout, you can specify the route
        return redirect()->route('login');
    }
}