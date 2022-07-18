<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class registrationController extends Controller
{
    public function registerShow()
    {
        return view('form');
    }
    public function loginShow()
    {
        return view('login');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'pass' => 'required',
            ]
        );
        $user=new Users;
        $user->name=$request->name;
        $user->phone=$request->phone; 
        $user->email=$request->email;
        $user->pass=$request->pass;
        $user->save();
        return redirect('customer-view');
    }
    public function view(){
        $people = Users::all();
        $data = compact('people');
        return view('customer-view')->with($data);
    }
}
