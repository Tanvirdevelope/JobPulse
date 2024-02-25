<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobBanner()
    {
        return view('pages.job-page');
    }

    public function jobCreate()
    {
        return view('userpanel.admin.job.job-create');
    }

    public function jobList()
    {
        return view('userpanel.admin.job.job-list');
    }
}
