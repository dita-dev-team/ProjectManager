<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function getUserProfile($id, Request $request){

        return view('userProfile');

//        if(Auth::check()){
//
//        } else {
//            return view('errors.error403');
//        }
    }
}
