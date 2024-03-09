<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CompanyEmployeesInfo;

class CompanyEmployeesInfoController extends Controller
{
    public function create()
    {
        $companyEmployeesInfos= CompanyEmployeesInfo::get();
        return view('userpanel.company.employee.employee-create', compact('companyEmployeesInfos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            // 'lastName' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:100',
            'password' => 'required|string|min:3',
            'gender' => 'required',
            'address' => 'required',
            'joining_date' => 'required',
            'company_role'=>'required',
        ]);
        $newUser = User::create([
            'name' => $request->input('name'),
            // 'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            // 'phone' => $request->input('phone'),
            // 'image' => $request->input('image'),
            // 'role' => 'company',
            'password' => $request->input('password'),
        ]);
        if($newUser){
            $user = User::latest('id')->first();
            $userId = $user->id;

            $employee = CompanyEmployeesInfo::create([
                'user_id' => $userId,
                'company_id' => $request->input('company_id'),
                'company_role' => $request->input('company_role'),
                'gender' => $request->input('gender'),
                'address' => $request->input('address'),
                'joining_date' => $request->input('joining_date'),
            ]);
            if($employee){
                return redirect('company-employee-list')->with('success', 'Employee Added Successfully');

            }
             else{
                return back()->with('error', 'Something went wrong');
            }
        }

    }
}
