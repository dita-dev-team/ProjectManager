<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getWelcome()
    {
        return view('/');
    }
//register function here
    public function register(Request $request)
    {
        $email = $request ['email'];
        $name = $request ['name'];
        $username = $request ['username'];
        $password = bcrypt($request ['password']);

        $user = new User();
        $user->email =$email;
        $user->name = $name;
        $user->username = $name;
        $user->password = $password;

        $user->save();
        return redirect()->back();
    }
//login function here
    public function login(Request $request)
    {
        if  (Auth::attempt(['username' => $request['username'], 'password' =>$request['password']])){
            return redirect()->route{'/'};
        }
        return redirect()->back();
    }
}