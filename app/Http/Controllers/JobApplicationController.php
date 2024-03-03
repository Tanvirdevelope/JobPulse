<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CompanyInfo;
use App\Models\JobCircular;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function applyPage(Request $job_id)
    {  
        // $job_details = JobApplication::all();
        $job_details = JobCircular::find($job_id);
        
        // $job_details = JobCircular::where('id', $job_id)->get();
        // dd($job_details);
        return view('pages.job-apply', compact('job_details'));
        
    }

 
    public function applicationStore(Request $request){
//         $request->validate([
//        'organization_name' => 'required|string|max:100',
//        'candidate_address' => 'required|string|max:100',
//        'candidate_birth' => 'required|string|max:100',
//        'candidate_age'=> 'required|numeric',
//        'candidate_gender'=> 'required|string|max:200',
//        'candidate_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
//        'candidate_signature'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
//    ]);
    // $job_applications = JobApplication::all();
    
   JobApplication::create($request->all());

   return view('pages.job-apply');
// return redirect()->route('apply')->with('success','Jobs Apply Successfully');
}


  
}
