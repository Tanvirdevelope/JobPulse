<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\JobCircular;
use Illuminate\Http\Request;

class JobCircularController extends Controller
{
    public function allItem(){
        // $jobPublished= JobCategories::orderBy('id', 'desc')->get();
        $jobPublished = Category::select('categories.category_name', 'categories.id as category_id')
        ->leftJoin('job_circulars', 'categories.id', '=', 'job_circulars.job_category_id')
        ->selectRaw('COUNT(job_circulars.id) as total_jobs')
        ->groupBy('categories.id', 'categories.category_name')
        ->get();
        //dd($jobPublished);
         $jobList= JobCircular::orderBy('id', 'desc')->get();

         return view('pages.home-page', compact('jobList','jobPublished'));
    }

    public function jobIndex()
    {

        $jobList= JobCircular::orderBy('id', 'desc')->get();

         return view('pages.job-page', compact('jobList'));

      
    }

    public function show_jobDetails(string $id)
    {
        $job_details= JobCircular::findOrFail($id);
        return view('pages.job-details', compact('job_details'));
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
