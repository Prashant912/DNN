<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\banner_image_detail;
use App\Model\NewsCategory;
use App\Model\latest_new;
use App\Model\TrendingNews;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Auth;
use App\Model\contact_us;
use App\Model\location;








class frontController extends Controller
{
    public function front(){

    	$data['bannerImagedetal'] = banner_image_detail::get();

    	$data['latestNewsCategory'] = NewsCategory::with('newsaCategoryImageList','featuredImage')->where('status' ,'active')->get();
    		//dd($data['latestNewsCategory']);
    	/*with(['videos' => function($q) {
                        $q->select('id', 'name');
                        $q->where('available', '=', 1);*/

    	/*$user->invitedMeetings()
                ->with(['meeting.creator' => function ($query) use ($status) {
                    if (!empty($status)) {
                        $query->where('meetings.status', '=', $status);
                    }
                }])->get();*/

    	///$data['categoryDetail'] =  latest_new::where('fetured_image', '1')->get();

    	// dd($data['latestNewsCategory']);

       $TrendNewsCategory = TrendingNews::get()->sortBy('count')->take(5)->toArray();

        $otherFourData = array_shift($TrendNewsCategory);
        //$data['TrendNewsCategorys']  =  $data['TrendNewsCategory'][0];

        //$data['otherFourData'] = array_shift($data['TrendNewsCategory']);

         //dd($otherFourData);

    	return view('frontend.home.homes',compact('TrendNewsCategory','otherFourData'))->with($data);
    }


    public function accountSection(Request $Request){

        return view('frontend.home.account');
    }

    public function frontRegister(Request $request){

       $validator = \Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('/front/account')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $admin = User::create([
            'email' => request('email'),
            'name' => request('name'),
            'roll_id' => request('id'),
            'password' =>bcrypt(request('password'))
             ]);
            
        }

        session()->flash('message','You have Registered Successfully please check mail and verify.');
        $status = Mail::to($admin->email)->send(new SendMailable($admin->name));  
        return redirect('/front/account');
    }

    public function frontLogin(Request $request){

         $validator = \Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],

        ]);

        if ($validator->fails()) {
            return redirect('/front/account')
            ->withErrors($validator)
            ->withInput();
        }

        $email  = $request->get('email');
        $password = $request->get('password');

        $userData = User::select('name','roll_id')->where('email',$email)->first();



         if(!empty($userData) &&!empty($userData->name) ){

           

            if ($userData->roll_id == 3){

                if(Auth::attempt(['email' => $email, 'password' => $password])){
                    session()->flash('message','Successfully login');
                    return redirect('/front');
                } else {
                    session()->flash('message','Credential Wrong');
                }

            } else {
                session()->flash('message','Unauthorised User.');
            } 
        } else {
            session()->flash('message','Please do register first');
        }

        return redirect('/front/account'); 

        
    }

    public function frontLogout(){
        Auth::logout();
        return redirect('/front/account');
    }


    public function contactForm(){


        $data['locationdata']=location::first();

        return view('frontend.home.contact')->with($data);
    }

    /*public function storeContactForm(Request $request){

        //dd($request->all());

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required', 'string', 'email', 'max:255',
            'phone' => 'required',
            'message' => 'required',
        ]); 

        $admin = contact_us::create([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message'),
            
            ]);

         session()->flash('message','Thank you For visit!! will call contact you soon');
        
         return redirect('/front/contact');
        }*/

        public function storeContactForm(Request $request){

           /* dd($request->all());*/

            $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required', 'string', 'email', 'max:255',
            'phone' => 'required',
            'message' => 'required',
        ]);

            $admin = contact_us::create([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message'),
            
            ]);

            // session()->flash('message','Thank you For visit!! will call contact you soon');
            //return redirect('/front/contact');
            return response()->json(['message'=>"Thank you For visit!! will call contact you soon"]);
        }





}
