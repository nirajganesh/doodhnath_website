<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    protected $authmodel;
    function __construct()
    {
        $this->authmodel = new AuthModel();
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function usercreate(Request $request)
    {
        $request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'password'=>'required|same:repassword'
          ]
       );
      
       $fullname=$request->input('fullname');
       $email=$request->input('email');
       $password=$request->input('password');
       $this->authmodel->name=$fullname;
       $this->authmodel->email=$email;
       $this->authmodel->password=Hash::make($password);
       $user=$this->authmodel->save();
       $id=$this->authmodel->id;
       if($user)
       {
          session([
            'id'=>$id,
            'fullname'=>$fullname,
            'email'=>$email
          ]);
          return redirect('/dashboard');
       }
       else
       {
          return Redirect::back()->with('error','User is not login');
       }
    }

    public function userlogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
          ]
        );
        
        $email=$request->input('email');
        $password=$request->input('password');
        $userdata=$this->authmodel::where('email',$email)->get()->first();
        if($userdata)
        {
           
            if(Hash::check($password, $userdata->password))
            {
                $id=$userdata['id'];
                $name=$userdata['name'];
                $email=$userdata['email'];

                session([
                    'id'=>$id,
                    'fullname'=>$name,
                    'email'=>$email
                ]);
                return redirect('/dashboard');
            }
            else
            {
                return Redirect::back()->with('error_password','Password is incorrect');
            }
        }
        else
        {
            return Redirect::back()->with('error_email','Email is incorrect');
        }
        
    }


}
