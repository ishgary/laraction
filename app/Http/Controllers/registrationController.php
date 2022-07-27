<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerAuth;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Redirect;

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
    public function store(registerAuth $request)
    {
        Users::create($request->validated());
        return redirect()->route('welcome');
        
    }
    public function view(){
        $people = Users::latest('updated_at')->get();
        $data = compact('people');
        return view('customer_view')->with($data);
    }
    public function log(Request $request)
    {
       
        $userData = Users::where('email','=',$request->email)->first();

        if(!$userData){
            return back()->with('fail',"Email Not Found");
        }
        else
        {
            if($request->password == $userData->password)
            {
                $request->session()->put('logged_user',$userData->id);
                return redirect()->route('welcome');
            }
            else
            {
                return back()->with('fail',"Incorrect Password");
            }
        }
    }
    
    public function dashboard()
    {
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('logged_user'))->first()];
        return view('welcome',$data);
    }
    public function show()
    {
        $user_data = Users::latest('updated_at')->get();
        return view('customer_view', ['members' => $user_data]);
    }
    
}
