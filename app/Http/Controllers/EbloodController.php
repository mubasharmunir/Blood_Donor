<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Blood;
use App\Models\Donor;
use App\Models\Message;
use App\Models\Contact;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;








class EbloodController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:donor')->except('logout');
    }

    public function contact(){
        $super_donors = Donor::get();
        return view('project2.contact',compact('super_donors'));
    }
    public function why_donor(){
        $super_donors = Donor::get();
        return view('project2.why_become_donor',compact('super_donors'));
    }
    public function become_donor(){
        $all_cities = City::get();
        $all_bloods =Blood::get();
        $super_donors = Donor::get();
       
        return view('project2.become_donor',compact('all_cities','all_bloods','super_donors'));
    }
    public function about(){
        $super_donors = Donor::get();
        return view('project2.about',compact('super_donors'));
    }

    public function edonor_store(Request $request){
        $request->validate([
            'donor_name' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'image' => 'required',
            'city' => 'required',
            'blood_group' => 'required',
        ]);
        $fileName='';
        if($request->hasFile('image'))
        {
            $fileName = time() . rand() . '.' . $request->image->extension();
            $request->image->move(public_path('panel'), $fileName);
            $fileName='/panel/'.$fileName;
        }
        $save=  new Donor();
        $save->donor_name=$request->donor_name;
        $save->age=$request->age;
        $save->city_id=$request->city;
        $save->phone=$request->phone;
        $save->gender=$request->gender;
        $save->blood_group_id=$request->blood_group;
        $save->image = $fileName;
        $save->save();
        return back()->with('success', 'Conratulation to Become a Blood Donor'); 
    }
    public function eblood($id){
       $all_donors = Donor::get();
       $blood_groups = Blood::get();
       $donor = Donor::with('city','donor')->find();
       $super_donors= Donor::with('city','donor')->get();
       // $posts = Post::latest()->take(10)->get();
       return view('super',compact('all_donors','blood_groups','donor','super_donors','dell'));
    }
    public function donor_search(Request $request) {
    //   return view('super',compact('blood_groups','super_donors','cities','blood_search'));
        $super_donors= Donor::with('city','donor')->get();
        $blood_groups = Blood::get();
        $cities= City::get();
        
      if(isset($request->city) && isset($request->blood_group)){
          // ||

            $search = Donor::where('city_id', $request->city)->Where('blood_group_id',$request->blood_group)->get();

            // dd($search);
            return view('layout2.search',compact('search','blood_groups','super_donors','cities'));
        } 
      else{
          return redirect()->route('index')->with('message','Please fill the required field you want to search');
       }
    }
    public function send_messge(Request $request){

        $request->validate([
            'message_name' => 'required',
            'message_email' => 'required|email',
            'message_mobile' => 'required',
            'message_message' => 'required'
        ]);
        // Message::create($request->all());
        // return redirect()->back()
        // ->with(['successs' => 'Thank you for contact us. we will contact you shortly.']);



        $message=[
            'name'=> $request->message_name,
            'email'=>$request->message_email,
            'mobile'=>$request->message_mobile,
            'message'=>$request->message_message,
        ];

        $send_message= Message::create($message);

        if($send_message){
            $email=$send_message->email;
            // Mail::to($email)->send(new MessageMail($message));
            // dd('dadasd');
            Mail::to($email)->send(new MessageMail($message));
            // dd('dadasddada');
            
            return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you soon.']);
        }
        

        // $send_message = new Message();
        // $send_message->name=$request->message_name;
        // $send_message->email=$request->message_email;
        // $send_message->mobile=$request->message_mobile;
        // $send_message->message=$request->message_message;
        // $send_message->save();
        // return back();
    }
    
    public function contact_us(Request $request){



        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'address' => 'required',
            'message' => 'required'
        ]);
        Contact::create($request->all());
        return redirect()->back()
        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);




    }
    

    
}
