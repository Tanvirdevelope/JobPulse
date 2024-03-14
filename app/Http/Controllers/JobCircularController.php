<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\JobCircular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JobCircularController extends Controller
{
    public function allItem()
    {
        $jobPublished = Category::select('categories.category_name', 'categories.id as category_id')
            ->leftJoin('job_circulars', 'categories.id', '=', 'job_circulars.job_category_id')
            ->selectRaw('COUNT(job_circulars.id) as total_jobs')
            ->groupBy('categories.id', 'categories.category_name')
            ->get();
        //dd($jobPublished);
        $jobList = JobCircular::paginate(3);
        //  $jobList= JobCircular::orderBy('id', 'desc')->get();

        return view('pages.home-page', compact('jobList', 'jobPublished'));
    }

    public function jobIndex()
    {

        $jobPublished = Category::select('categories.category_name', 'categories.id as category_id')
            ->leftJoin('job_circulars', 'categories.id', '=', 'job_circulars.job_category_id')
            ->selectRaw('COUNT(job_circulars.id) as total_jobs')
            ->groupBy('categories.id', 'categories.category_name')
            ->get();

        $jobList = JobCircular::paginate(6);

        return view('pages.job-page', compact('jobList', 'jobPublished'));
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
        $job_details = JobCircular::findOrFail($id);
        return view('pages.job-details', compact('job_details'));
    }




    public function jobCreate()
    {
        $company_infos = CompanyInfo::where('user_id', Auth::id())->first('id');

        $categories = Category::all();
        $this->data['categories'] = [];
        foreach ($categories as $category) {
            $this->data['categories'][$category->id] = $category->category_name;
        }
        return view('userpanel.company.job.job-create',  $this->data, compact('company_infos'));
    }


    public function jobShow(string $id)
    {
        $jobs = JobCircular::findOrFail($id);
        return view('userpanel.company.job.job-show', compact('jobs'));
    }

    public function jobStore(Request $request)
    {
        $request->validate([
            'company_id' => 'required|numeric',
            'job_category_id' => 'required|numeric',
            'organization_name' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'application_deadline' => 'required|string|max:100',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'vacancy_count' => 'required|numeric',
            'job_location' => 'required|string|max:200',
            'minimum_salary' => 'required|numeric',
            'published_date' => 'required|string|string',
            'requirements' => 'required|string',
            'responsibilities' => 'required|string',
            'benefits' => 'required|string',
            'employment_status' => 'required|string',
        ]);

        if ($request->hasFile('company_logo')) {
            $image = $request->company_logo;
            $imageName = 'company_logo' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets/img/company/', $imageName);
        }

        $createJobs = JobCircular::create([
            'company_id' => $request->input('company_id'),
            'job_category_id' => $request->input('job_category_id'),
            'organization_name' => $request->input('organization_name'),
            'designation' => $request->input('designation'),
            'application_deadline' => $request->input('application_deadline'),
            'company_logo' => $imageName,
            'vacancy_count' => $request->input('vacancy_count'),
            'job_location' => $request->input('job_location'),
            'minimum_salary' => $request->input('minimum_salary'),
            'published_date' => $request->input('published_date'),
            'education' => $request->input('education'),
            'experience' => $request->input('experience'),
            'requirements' => $request->input('requirements'),
            'responsibilities' => $request->input('responsibilities'),
            'benefits' => $request->input('benefits'),
            'employment_status' => $request->input('employment_status')
        ]);

        $result = $createJobs->save();
        if ($result) {
            return redirect()->route('job-list')->with('success', 'Job Circular Created Successfully');
        } else {
            return back()->with('failed', 'Something went wrong');
        }

        // return redirect()->route('job-list')->with('success','Jobs Created Successfully');
    }


    public function jobEdit(string $id)
    {
        $company_infos = CompanyInfo::where('user_id', Auth::id())->first('id');
        $jobs = JobCircular::findOrFail($id);
        $categories = Category::all();
        $this->data['categories'] = [];
        foreach ($categories as $category) {
            $this->data['categories'][$category->id] = $category->category_name;
        }
        return view('userpanel.company.job.job-edit', $this->data, compact('jobs', 'company_infos'));
    }

    public function jobUpdate(Request $request, string $id)
    {

        $request->validate([
            'company_id' => 'required|numeric',
            'job_category_id' => 'required|numeric',
            'organization_name' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'application_deadline' => 'required|date|max:100',
            'vacancy_count' => 'required|numeric',
            'job_location' => 'required|string|max:200',
            'minimum_salary' => 'required|numeric',
            'published_date' => 'required|date|string',
            'requirements' => 'required|string',
            'responsibilities' => 'required|string',
            'benefits' => 'required|string',
            'employment_status' => 'required|string',
        ]);


        $jobs = JobCircular::find($id);
        $jobs->update($request->all());

        return redirect()->route('job-list')->with('success', 'Jobs Updated Successfully');
    }

    public function jobDelete(Request $request, string $id)
    {
        $jobs = JobCircular::find($id);
        $jobs->delete();

        return redirect()->route('job-list')->with('success', 'Jobs Deleted Successfully');
    }


    public function jobList()
    {
        $user_id = auth()->user()->id;
        $company_info = DB::table('company_infos')
            ->where('user_id', $user_id)
            ->first();
        $company_id = $company_info->id;

        $jobs = DB::table('job_circulars')
            ->where('company_id', $company_id)
            ->get();
        //dd($jobsLists);
        return view('userpanel.company.job.job-list', compact('jobs'));

        // $jobs = JobCircular::latest()->get();
        // return view('userpanel.company.job.job-list', compact('jobs'));
    }

    public function applicants_list(Request $request)
    {
        $jobID = $request->input('job_id');
        $companyID = $request->input('company_id');
        //dd($jobID, $companyID);

        $applicantsLists = DB::table('job_applications')
            ->where('job_id', $jobID)
            ->where('company_id', $companyID)
            ->get();
        $totalApplicants = $applicantsLists->count();
        //dd( $applicantsLists);
        return view('userpanel.company.job.application-list', compact('applicantsLists'));
    }

    public function applicant_details(string $id)
    {
        $applicantsinfo = DB::table('job_applications')
            ->where('id', $id)
            // ->where('company_id', $companyID)
            ->first();
        //dd($applicantsinfo);
        return view('userpanel.company.job.applicant-details', compact('applicantsinfo'));
    }
}
