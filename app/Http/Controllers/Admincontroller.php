<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class Admincontroller extends Controller
{

    public function add_users(Request $request)
    {
      $add_users =new user;
      //  return view('admin.add_users '); 

      $add_users->name = $request->name;
      $add_users->email = $request->email;
      $add_users->contact_number = $request->contact_number;
      $add_users->password = $request->password;


      //$table->id();
      //$table->string('name');
      //$table->string('email')->unique();
      //$table->string('contact_number')->nullable();
      //$table->string('usertype')->default(0);
      
      //$table->string('password');
   
      

      $add_users->save();
      return redirect()->back(); 
    }
}
