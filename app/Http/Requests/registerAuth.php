<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Users;

class registerAuth extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules( $request)
    {
        return [
            
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'pass' => 'required | min:5 ',
            
        ];
        $user=new Users;
        $user->name=$request->name;
        $user->phone=$request->phone; 
        $user->email=$request->email;
        $user->pass=$request->pass;
        $user->save();
        
    }
}
