<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use App\User;

class AuthController extends Controller
{
     public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request){

    	 $validator = \Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('/admin/registration')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $admin = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' =>bcrypt(request('password'))
            ]);
        }


        $status = Mail::to($admin->email)->send(new SendMailable($admin->name));

        session()->flash('message','User Registered Successfully.');

        
       return redirect('/admin/home');
      
       
    }

    public function loginform(){

      return view('auth.login');

    }


    public function logincheck(Request $request){
        

        $validator = \Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],

        ]);

        if ($validator->fails()){
            return redirect('/admin')
            ->withErrors($validator)
            ->withInput();
        }

        $email  = $request->get('email');
        $password = $request->get('password'); 

             
        $userData = User::select('roll_id','email')->where('email',$email)->first(); 

        if(!empty($userData)){

            if ($userData->roll_id == 1){

                if(Auth::attempt(['email' => $email, 'password' => $password])){
                    return redirect('/admin/home');
                } else {
                    session()->flash('message','Credential Wrong');
                }

            } else {
                session()->flash('message','Unauthorised User.');
            } 
        } else {
            session()->flash('message','Please do register first');
        }

        return redirect('/admin');      
    }

    public function logout(){

        Auth::logout();
        return redirect('/admin');
    } 

     
}

