<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function getUserProfile($id, Request $request){

        return view('userProfile', [
            'pageTitle' => 'Hello, John'
        ]);

//        if(Auth::check()){
//
//        } else {
//            return view('errors.error403');
//        }
    }
}
