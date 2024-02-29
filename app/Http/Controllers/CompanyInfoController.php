<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    public function companyList()
    {
        $companylist= CompanyInfo::orderBy('id', 'desc')->get();
       // dd('$jobscategories');
         return view('userpanel.admin.company-info.company-list', compact('companylist'));
    }
}
