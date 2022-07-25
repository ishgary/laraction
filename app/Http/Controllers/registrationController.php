<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Models\tran;
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
    public function register()
    {
        return redirect('welcome');
        
    }
    public function view(){
        $people = Users::latest('updated_at')->get();
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
    
    public function dashboard()
    {
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('logged_user'))->first()];
        return view('welcome',$data);
    }
    public function show()
    {
        $user_data = Users::latest('updated_at')->get();
        return view('Customer-view', ['members' => $user_data]);
    }
    public function transFill(Request $req){
        // $req->validate([
        //     'title' => "required",
        //     'date' => "required",
        //     'paid_by_to' => "required",
        //     'amount' => "required",
        //     'quantity' => "required",
        //     'unit' => "required",
        //     'total' => "required",
        //     'type' => "required",
        //     'status' => "required",
        //     'utr' => "required",
        //     'project' => "required",                 
        //     'comment' => "required",
        // ]);
        
        $user=new tran;
        $user->title=$req->title;
        $user->date=$req->date; 
        $user->paid_by_to=$req->paid_by_to;
        $user->amount=$req->amount;
        $user->quantity=$req->quantity;
        $user->unit=$req->unit;
        $user->total=$req->total;
        $user->type=$req->type;
        $user->status=$req->status;
        $user->utr=$req->utr;
        $user->project=$req->project;
        $user->comment=$req->comment;
        $user->save();
        return redirect('welcome');
    }
}
