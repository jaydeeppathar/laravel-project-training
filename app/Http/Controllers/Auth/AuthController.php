<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;


class AuthController extends AdminController
{
    /**
     * Write code on Method
     *
     * @return response()
    */
    public function index()
    {
        return view('auth.login');
    }

     /**
     * Write code on Method
     *  
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }  

        /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.home');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.register');
    }

    /**
     * Write code on Method
     *
     * @return response()
    */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'retype_password' => 'required|min:6|same:password',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        auth()->login($check);
        return redirect()->route('admin.index')->withSuccess('Great! You have Successfully loggedin');

        
    }

    /**
     * Write code on Method
     *
     * @return response()
    */
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect()->route('home');
    }
}
