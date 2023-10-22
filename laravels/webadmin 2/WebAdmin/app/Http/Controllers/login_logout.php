<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use Hash;
use Session;

class login_logout extends Controller
{
    public function index()
    {
        return view('/login');
    } 
    public function login(Request $request)
    {
        return view('/login');
    }
    public function logint(Request $request)
    {
        return view('/loginTeacher');
    }
    public function logins(Request $request)
    {
        return view('/loginStudent');
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:12'

        ]);
        $user=user::where('email','=',$request->email)->first();
        if($user){
            if($request->password==$user->password){
                $request->session()->put('loginId',$user->id);
                return redirect('/dashboard');
            }else {
                return back()->with('fail',"This password don't match");
            }

        }else{
            return back()->with('fail',"This email is not User");
        }

    }

        public function loginTeacher(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'phone'=>'required|min:4|max:12'

        ]);
        $teacher=Teacher::where('email','=',$request->email)->first();
        if($teacher){
            if($request->email==$teacher->email){
                $request->session()->put('loginid',$teacher->id);
                return redirect('/dashboardd');
            }else {
                return back()->with('fail',"This password don't match");
            }

        }else{
            return back()->with('fail',"This email is not Teacher");
        }
    }
    public function dashboardd()
    {
        return "Welcome to the dashboard";
    }
    public function loginStudent(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'phone'=>'required|min:4|max:12'

        ]);
        $student=Student::where('email','=',$request->email)->first();
        if($student){
            if($request->email==$student->email){
                $request->session()->put('loginid',$student->id);
                return redirect('/dashboarddd');
            }else {
                return back()->with('fail',"This password don't match");
            }

        }else{
            return back()->with('fail',"This email is not Student");
        }
    }
}
