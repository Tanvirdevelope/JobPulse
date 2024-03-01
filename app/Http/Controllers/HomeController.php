<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller


{
    public function aboutList()
    {
        return view('pages.about-page');
    }

    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->user_type;
            if($usertype=="admin"){
                return view('userpanel.admin.admin-dashboard');
            }
            else if($usertype=="company"){
                return view('userpanel.company.company-dashboard');
            }
            else if($usertype=="user"){
                return view('userpanel.user.user-dashboard');
            }
        }
        else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }


}
