<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\JobCircular;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\CompanyEmployeesInfo;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller


{
    public function aboutList()
    {
        return view('pages.about-page');
    }

    public function index()
    {

        $totalUser = User::get()->count();
        $totalJobCategory = Category::get()->count();
        $totalCompany = CompanyInfo::get()->count();

        // Company dashboard items
        $totalPendingJob = JobCircular::join('company_infos', 'company_infos.id', '=', 'job_circulars.company_id')
            ->where('company_infos.user_id', '=', Auth::id())
            ->where('job_circulars.status', 0)
            ->get()
            ->count();

        $totalPublishedJob = JobCircular::join('company_infos', 'company_infos.id', '=', 'job_circulars.company_id')
            ->where('company_infos.user_id', '=', Auth::id())
            ->where('job_circulars.status', 1)
            ->get()
            ->count();

        $totalEmployee = CompanyEmployeesInfo::join('company_infos', 'company_infos.id', '=', 'company_employees_infos.company_id')
            ->where('company_infos.user_id', '=', Auth::id())
            ->get('company_employees_infos.id')
            ->count();

        $totalApplication = JobApplication::join('company_infos', 'job_applications.company_id', '=', 'company_infos.id')
            ->where('company_infos.user_id', '=', Auth::id())
            ->get('job_applications.id')
            ->count();

        // User dashboard items
        $totalAppliedJob = JobApplication::where('user_id', '=', Auth::id())->count();

        if (Auth::id()) {
            $userRole = Auth()->user()->user_role;
            if ($userRole === 1) {
                return view('userpanel.admin.admin-dashboard', compact('totalUser', 'totalJobCategory', 'totalCompany'));
            } else if ($userRole === 2) {
                return view('userpanel.company.company-dashboard', compact('totalApplication', 'totalEmployee', 'totalPendingJob', 'totalPublishedJob'));
            } else if ($userRole === 0) {
                return view('userpanel.user.user-dashboard', compact('totalAppliedJob'));
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}
