<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

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
                'pass' => 'required | min:5 ',
            ]
        );
        $user=new Users;
        $user->name=$request->name;
        $user->phone=$request->phone; 
        $user->email=$request->email;
        $user->pass=$request->pass;
        $user->save();
        return redirect('welcome');
    }
    public function view(){
        $people = Users::all();
        $data = compact('people');
        return view('customer-view')->with($data);
    }
    public function log(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'pass' => 'required | min:5',
        ]);

        $userData = Users::where('email','=',$request->email)->first();

        if(!$userData){
            return back()->with('fail',"Email Not Found");
        }
        else
        {
            if($request->password == $userData->password)
            {
                $request->session()->put('logged_user',$userData->id);
                return redirect('/welcome');
            }
            else
            {
                return back()->with('fail',"Incorrect Password");
            }
        }
    }
    // public function userLogin(request $request)
    // {
    //     $data= $request->input('user');
    //     $request->session()->put('user',$data);
    //     return redirect('welcome');
    // }
    function dashboard()
    {
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('logged_user'))->first()];
        return view('welcome',$data);
    }
    function show()
    {
        $user_data = Users::all();
        return view('Customer-view', ['members' => $user_data]);
    }
}
