<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function applyPage()
    {
        // $user_id = User::findOrFail($id);
        return view('pages.job-apply');
        //dd($cat_id);
    }

  
}
