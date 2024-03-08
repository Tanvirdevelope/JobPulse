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
        
        $jobPublished = Category::select('categories.category_name', 'categories.id as category_id')
        ->leftJoin('job_circulars', 'categories.id', '=', 'job_circulars.job_category_id')
        ->selectRaw('COUNT(job_circulars.id) as total_jobs')
        ->groupBy('categories.id', 'categories.category_name')
        ->get();

        $jobList= JobCircular::orderBy('id', 'desc')->get();

         return view('pages.job-page', compact('jobList','jobPublished'));

      
    }

    public function show_alljobs_by_category(string $id)
    {
        $cat_id = Category::findOrFail($id);
        $jobsList = JobCircular::where('job_category_id', $id)->get();
        return view('pages.job-category', compact('jobsList', 'cat_id'));
        //dd($cat_id);
    }

    public function show_jobDetails(string $id)
    {
        $job_details= JobCircular::findOrFail($id);
        return view('pages.job-details', compact('job_details'));
    }

    
    public function jobList()
    {
        $jobs = JobCircular::latest()->get();
        return view('userpanel.company.job.job-list',compact('jobs'));
    }

    public function jobCreate()
    {
        $categories = Category::all();
        $this->data['categories'] = [];
        foreach ($categories as $category) {
            $this->data['categories'][$category->id] = $category->category_name;
        }
        return view('userpanel.company.job.job-create',  $this->data);
    }

    
    public function jobShow(string $id)
    {
        $jobs = JobCircular::findOrFail($id);
        return view('userpanel.company.job.job-show', compact('jobs'));
    }

    public function jobStore(Request $request){
             $request->validate([
                'user_id' => 'required|numeric',
                'job_category_id' => 'required|numeric',
                'organization_name' => 'required|string|max:100',
                'designation' => 'required|string|max:100',
                'application_deadline' => 'required|string|max:100',
                'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
                'vacancy_count'=> 'required|numeric',
                'job_location'=> 'required|string|max:200',
                'minimum_salary'=> 'required|numeric',
                'published_date'=> 'required|string|string',
                'requirements'=> 'required|string',
                'responsibilities'=> 'required|string',
                'benefits'=> 'required|string',
                'employment_status'=> 'required|string',
        ]);

        if($request->hasFile('company_logo')){
            $image = $request->company_logo;
            $imageName = 'company_logo'.time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/img/company/', $imageName);
        }

        $createJobs= JobCircular::create([
            'user_id'=> $request->input('user_id'),
            'job_category_id'=> $request->input('job_category_id'),
            'organization_name'=> $request->input('organization_name'),
            'designation' => $request->input('designation'),
            'application_deadline' => $request->input('application_deadline'),
            'company_logo' => $imageName,
            'vacancy_count' => $request->input('vacancy_count'),
            'job_location' => $request->input('job_location'),
            'minimum_salary' => $request->input('minimum_salary'),
            'published_date' => $request->input('published_date'),
            'education' =>$request->input('education'),
            'experience' => $request->input('experience'),
            'requirements' => $request->input('requirements'),
            'responsibilities'=> $request->input('responsibilities'),
            'benefits' => $request->input('benefits'),
            'employment_status'=> $request->input('employment_status')
        ]);

        $result= $createJobs->save();
        if($result){
            return redirect()->route('job-list')->with('success', 'Job Circular Created Successfully');
        }else{
            return back()->with('failed', 'Something went wrong');
        }

        // return redirect()->route('job-list')->with('success','Jobs Created Successfully');
    }

   
    public function jobEdit(string $id){
        $jobs = JobCircular::findOrFail($id);
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


        $jobs = JobCircular::find($id);
        $jobs->update($request->all());

        return redirect()->route('job-list')->with('success','Jobs Updated Successfully');
    }

    public function jobDelete(Request $request, string $id){
        $jobs = JobCircular::find($id);
        $jobs->delete();

        return redirect()->route('job-list')->with('success','Jobs Deleted Successfully');
    }



    
}
