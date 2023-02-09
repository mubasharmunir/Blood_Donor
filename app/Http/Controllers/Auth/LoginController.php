<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor;
use App\Models\City;
use App\Models\Blood;

use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // $this->middleware('guest:admin')->except('logout');
       
    }
    public function admin_login_index(){
        // dd('dasdsd');
        return view('admin.login.admin_login_index');
    }
    public function admin_login(Request $request){
        $all_donors  = Donor::get();
        $all_bloods  = Blood::get();
        $all_cities= City::get();
        // dd('dasdasd');
        
    
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
         
            // dd('Innser');
            // return redirect()->intended('/admin_dashboard');
            // return redirect->route('dashboard_index');
            
            return view('admin.dashboard.index',compact('all_donors','all_cities','all_bloods'));
        }
        // dd('outer');
        return back()->withInput($request->only('email', 'remember'));
        // dd('outer');
        



    }



    // public function login(Request $request)
    // {   
    //     // dd('dasdddasdsadsadsa');
    //     $input = $request->all();
   
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
        
        
     
     


   
    //     // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     // {
    //     //     dd('dasdas');
    //     //     if (auth()->user()->is_admin == 1) {
    //     //         return redirect()->route('admin_dashboard');
    //     //     }else{
    //     //         return redirect()->route('home');
    //     //     }
    //     // }else{
    //     //     return redirect()->route('login')
    //     //     ->with('error','Email-Address And Password Are Wrong.');
    //     // }
       
    // }

    public  function logins_donor(){
        $super_donors = Donor::get();
       
        return view('auth.donor_login',compact('super_donors'));
    }
// public function perform()
// {
//     Session::flush(); 
//     Auth::logout();

//     return redirect('login');
// }




}
