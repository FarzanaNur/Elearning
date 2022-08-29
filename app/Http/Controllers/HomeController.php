<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\enrolls;


class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('user.home');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
       return view ('user.home');
    }

    public function enrolls()
    {
       

       if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                
                return view ('user.enrolls');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            
            return "You are not logged in";
        }
    }

    public function course()
    {
       return view ('user.course');
    }

    public function upload_info(Request $request)
    {
       $enrolls =new enrolls();
       $enrolls->name=$request->input('name');
       $enrolls->mail=$request->input('mail');
       $enrolls->contact=$request->input('contact');
       $enrolls->course_name=$request->input('course_name');
       $enrolls->course=$request->input('course');
       $enrolls->tranjection_id=$request->input('tranjection_id');

       $enrolls->save();
       return view ('user.home');
    }

    public function Contact()
    {
       return view ('user.Contact');
    }

    public function about()
    {
       return view ('user.about');
    }


}