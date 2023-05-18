<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;
use SessionHandler;

class AuthController extends Controller
{
     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
          return redirect()->route('admindashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

        /**
     * Logs out the authenticated user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */


    public function authlogout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }

    public function useregister(){
        return view('register');
    }

    public function register(Request $request){

        $validator = $request->validate([
            'login_email' => ['required', 'email'],
            'Name' => ['required'], 
            'login_password' => ['required'],
        ]);
    
        DB::table('customer_masters')->insert([
            'mail' => $request->login_email,
            'name' => $request->Name,
            'password' => Hash::make($request->login_password),
        ]);

        return redirect()->route('userlogin');
    }

    public function userlogin(){
        return view('userlogin');
    }

        /**
     * Validates user login credentials and logs the user in if they are valid.
     *
     * @param Request $request The HTTP request containing the user's login credentials.
     * @return Illuminate\Http\RedirectResponse A redirect to the home page if login is successful, 
     *         otherwise a redirect to the login page with an error message.
     */


    public function userlog(Request $request){
        $validator = $request->validate([
            'login_email' => ['required', 'email'],
            'login_password' => ['required'],
        ]);
       // hash password check methoad 
        $user = DB::table('customer_masters')->where('mail', $request->login_email)->first();

        if($user && Hash::check($request->login_password, $user->password)){
            Session::put("userid", $user->id);
            Session::put("username", $user->name);
            return redirect()->route('home');
        }
        else{
            return redirect()->route('userlogin')->withError(['login_email' => 'Invalid Credentials', 'login_password' => 'Invalid Credentials']);
        }

    }

    public function userlogout(){
        if(Session::has('userid'))
        {
            Session::forget("userid");
            Session::forget("username");
        }
       
        return redirect()->route('home');
    }

}


