<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CompanyInfo;
use App\Models\JobCircular;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\DB;

class JobApplicationController extends Controller
{
    public function applyJob(string $id)
    {  
        // $job_details = JobApplication::all();
        $job_details = JobCircular::findOrFail($id);
        $existingJob = DB::table('job_applications')->where('job_id', $id)->first();
        if ($existingJob ) {
            return redirect()->back()->with('error', 'You have already applied.');
        } else {
            return view('pages.job-apply', compact('job_details'));
        }
        // $job_details = JobCircular::where('id', $job_id)->get();
        // dd($job_details);
        // return view('pages.job-apply', compact('job_details'));
        
    }

 
    public function applicationStore(Request $request){
     //dd($request);
     $user_id = auth()->user()->id;
     $job_id=$request->input('job_id');
     //$existingJob = JobApplication::findOrFail($user_id);
     $existingJob = DB::table('job_applications')->where('job_id', $job_id)->first();
     //dd($existingJob);
     if ($existingJob) {
         return redirect()->back()->with('error', 'You have already applied.');
     } else {

         $request->validate([
             'job_id' => 'required',
             'first_name' => 'required|string|max:255',
             'last_name' => 'required|string|max:255',
             'address' => 'required|string',
             'gender' => 'required|string',
             'birth_date' => 'required|date'
             // 'image' => 'image|mimes:jpg,png,jpeg|max:1024',
             // 'signature' => 'image|mimes:jpg,png,jpeg|max:1024',
             // 'cv' => 'file|mimes:pdf,doc,docx|max:2048', // Assuming CV is a document
 
         ]);
         $image = $request->file('image');
         if ($image) {
                 // Processing image file
                 $picFile = $image;
                 $getPicFileName = $picFile->getClientOriginalName();
                 $picname = $user_id.$getPicFileName;
                 $picFile->move('assets/img/profile', $picname);
         }
         $signature = $request->file('signature');
         if ($signature) {
             // Processing image file
             $picFile = $signature;
             $getPicFileName = $picFile->getClientOriginalName();
             $signame = $user_id.$getPicFileName;
             $picFile->move('assets/img/profile', $picname);
         }
         $cv = $request->file('cv');
         if ($cv) {
             // Processing image file
             $picFile = $cv;
             $getPicFileName = $picFile->getClientOriginalName();
             $cvname = $user_id.$getPicFileName;
             $picFile->move('assets/img/profile', $picname);
          }

         $job_application= JobApplication::create([
             'user_id'            =>  auth()->user()->id,
             'job_id'             => $request->input('job_id'),
             'first_name'         => $request->input('first_name'),
             'last_name'          => $request->input('last_name'),
             'address'            => $request->input('address'),
             'gender'             => $request->input('gender'),
             'birth_date'         => $request->input('birth_date'),
             'image'              => $image,
             'signature'          => $signature,
             'cv'                 => $cv,

         ]);
         
     $result = $job_application ->save();

     if ($result) {
             // return redirect()->back()->with('success', 'Job application submitted successfully.');
             return redirect()->route('job-details', ['id' => $job_id])->with('success', 'Job application submitted successfully.');
         } else {
             return redirect()->back()->with('error', 'Failed to submit job application.');
         }

     }

}


  
}
