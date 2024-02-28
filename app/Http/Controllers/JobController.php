<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobBanner()
    {
        return view('pages.job-page');
    }


    public function jobList()
    {
        $jobs = Job::latest()->get();
        return view('userpanel.company.job.job-list',compact('jobs'));
    }

    public function jobCreate()
    {
        return view('userpanel.company.job.job-create');
    }
    public function jobShow(string $id)
    {
        $jobs = Job::findOrFail($id);
        return view('userpanel.company.job.job-show', compact('jobs'));
    }

    public function jobStore(Request $request){
             $request->validate([
            'organization_name' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'application_deadline' => 'required|date|max:100',
            'vacancy_count'=> 'required|numeric',
            'job_location'=> 'required|string|max:200',
            'minimum_salary'=> 'required|numeric',
            'published_date'=> 'required|date|string',
            'requirements'=> 'required|string',
            'responsibilities'=> 'required|string',
            'benefits'=> 'required|string',
            'employment_status'=> 'required|string',
        ]);

        Job::create($request->all());

        return redirect()->route('job-list')->with('success','Jobs Created Successfully');
    }

   
    public function jobEdit(string $id){
        $jobs = Job::findOrFail($id);
        return view('userpanel.company.job.job-edit', compact('jobs'));
    }

    public function jobUpdate(Request $request, string $id){

        $request->validate([
            'organization_name' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'application_deadline' => 'required|date|max:100',
            'vacancy_count'=> 'required|numeric',
            'job_location'=> 'required|string|max:200',
            'minimum_salary'=> 'required|numeric',
            'published_date'=> 'required|date|string',
            'requirements'=> 'required|string',
            'responsibilities'=> 'required|string',
            'benefits'=> 'required|string',
            'employment_status'=> 'required|string',
        ]);


        $jobs = Job::find($id);
        $jobs->update($request->all());

        return redirect()->route('job-list')->with('success','Jobs Updated Successfully');
    }

    public function jobDelete(Request $request, string $id){
        $jobs = Job::find($id);
        $jobs->delete();

        return redirect()->route('job-list')->with('success','Jobs Deleted Successfully');
    }




}
