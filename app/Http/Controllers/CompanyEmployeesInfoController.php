<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CompanyEmployeesInfo;

class CompanyEmployeesInfoController extends Controller
{
    public function create()
    {
        $companyEmployeesInfos = CompanyEmployeesInfo::get();
        return view('userpanel.company.employee.employee-create', compact('companyEmployeesInfos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'contact' => 'required|string|max:100',
            'address' => 'required',
            'password' => 'required|string|min:3',
            'gender' => 'required',
            'joining_date' => 'required',
            'company_role' => 'required',
        ]);
        $newUser = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'user_role' => '2',
            'password' => $request->input('password'),
        ]);
        if ($newUser) {
            $user = User::latest('id')->first();
            $userId = $user->id;

            $employee = CompanyEmployeesInfo::create([
                'user_id' => $userId,
                'company_id' => $request->input('company_id'),
                'company_role' => $request->input('company_role'),
                'gender' => $request->input('gender'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address'),
                'image' => $request->input('image'),
                'joining_date' => $request->input('joining_date'),
            ]);
            if ($employee) {
                return redirect('company-employee-create')->with('success', 'Employee Added Successfully');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        }
    }
}
