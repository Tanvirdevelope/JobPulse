<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompanyEmployeesInfo;
use Illuminate\Support\Facades\Auth;

class CompanyEmployeesInfoController extends Controller
{
    public function index()
    {
        $this->data['empl_list'] = CompanyEmployeesInfo::orderBy('id', 'desc')->get();
        return view('userpanel.company.employee.employee-list', $this->data);
    }
    public function create()
    {
        $company_infos = CompanyInfo::where('user_id', Auth::id())->first('id');
        $companyEmployeesInfos = CompanyEmployeesInfo::get();
        return view('userpanel.company.employee.employee-create', compact('companyEmployeesInfos', 'company_infos'));
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

            if ($request->hasFile('photo')) {
                $image = $request->photo;
                $imageName = 'photo' . time() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/img/company/', $imageName);
            }

            $employee = CompanyEmployeesInfo::create([
                'user_id' => $userId,
                'company_id' => $request->input('company_id'),
                'company_role' => $request->input('company_role'),
                'gender' => $request->input('gender'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address'),
                'photo' => $imageName,
                'joining_date' => $request->input('joining_date'),
            ]);
            if ($employee) {
                return redirect('company-employee-list')->with('success', 'Employee Added Successfully');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        }
    }

    public function edit(string $id)

    {
        $emplEdit = CompanyEmployeesInfo::findOrFail($id);

        return view('userpanel.company.employee.employee-edit', compact('emplEdit'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'company_role' => 'required',
        ]);

        $employee = CompanyEmployeesInfo::where('id', $id)->firstOrFail();
        $employee->update([
            'company_role' => $request->input('company_role')
        ]);
        return redirect('company-employee-list')->with('success', 'Employee Updated Successfully');
    }

    public function destroy(string $id)
    {

        //first find user id and employee id
        $employee = CompanyEmployeesInfo::where('id', $id)->firstOrFail();
        $user = User::findOrFail($employee->user_id);
        if ($employee->delete() && $user->delete()) {
            return redirect('company-employee-list')->with('success', 'Employee Deleted Successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }
}
