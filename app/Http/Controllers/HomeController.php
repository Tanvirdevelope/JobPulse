<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->user_type;
            if($usertype=="admin"){
                return view('owner');
            }
            else if($usertype=="company"){
                return view('companies');
            }
            else if($usertype=="user"){
                return view('candidates');
            }
        }
    }
}
