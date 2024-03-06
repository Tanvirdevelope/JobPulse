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
            $userRole = Auth()->user()->user_role;
            if($userRole===1){
                return view('userpanel.admin.admin-dashboard');
            }
            else if($userRole===2){
                return view('userpanel.company.company-dashboard');
            }
            else if($userRole===0){
                return view('userpanel.user.user-dashboard');
            }
        }
        else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }


}
