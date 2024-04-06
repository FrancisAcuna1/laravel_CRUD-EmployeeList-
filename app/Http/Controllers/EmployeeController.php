<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;




class EmployeeController extends Controller
{
    public function navbar()
    {
        return view('template');
    }

    public function add_form()
    {
        return view('form');
    }

    public function employee_list()
    {   
        $record = Employee::all();
        $data = array(
            'record' => $record,
        );
        return view('employee_list', $data);
    }


    public function add(Request $request)
    {
        $existingEmployee = Employee::where('email',$request->input( 'email'))
            ->first();

        if($existingEmployee)
        {
            return redirect('add_form')->with('error_message', 'Employee with the same Email already exists!');
        }
        else {
            $fileName = time().'.'.$request->file('photo')->getClientOriginalExtension(); 
            $request->file('photo')->move(public_path('/uploaded_img'), $fileName);
    
            $record = [
                'firstname' => $request->input('firstname'),
                'middlename' => $request->input('middlename'),
                'lastname' => $request->input('lastname'),
                'date_of_birth' => $request->input('bday'),
                'civil_status' => $request->input('civilstatus'),
                'email' => $request->input('email'),
                'street' => $request->input('street'),
                'barangay' => $request->input('barangay'),
                'municipality' => $request->input('municipality'),
                'zip_code' => $request->input('zipcode'),
                'job_title' => $request->input('jobtitle'),
                'salary' => $request->input('salary'),
                'employment_status' => $request->input('employmentstatus'),
                'employee_photo' => $fileName,
            ];
    
            Employee::create($record);
            return redirect('add_form')->with('success_message', 'New Record Added Successfully!');
        }
    }
    

    public function edit_form($id)
    {   
        $info = Employee::where('id', $id)
            ->first();

        $data = array(
            'info' => $info,
            'edit' => true,
        );
        return view('editform', $data); 
    }
    

    public function update_records(Request $request)
    {
        
        $record = [
            'firstname' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'date_of_birth' => $request->input('bday'),
            'civil_status' => $request->input('civilstatus'),
            'email' => $request->input('email'),
            'street' => $request->input('street'),
            'barangay' => $request->input('barangay'),
            'municipality' => $request->input('municipality'),
            'zip_code' => $request->input('zipcode'),
            'job_title' => $request->input('jobtitle'),
            'salary' => $request->input('salary'),
            'employment_status' => $request->input('employementstatus'),
        ];

        Employee::where('id', $request->input('id'))->update($record);
        return redirect('/')->with('success_message', 'Record Successfully Updated!');

    }

    public function delete_records($id)
    {
        Employee::where('id', $id)->delete();
        return redirect('/')->with('success_message', 'Record Successfully Deleted!');
    }


    public function search()
    {
        $search_text = request('query');
        $employee = Employee::where('firstname', 'LIKE', '%'.$search_text.'%')
            ->orwhere('middlename', 'LIKE', '%'.$search_text.'%')
            ->orwhere('lastname', 'LIKE', '%'.$search_text.'%')
            ->orwhere('email', 'LIKE', '%'.$search_text.'%')
            ->orwhere('civil_status', 'LIKE', '%'.$search_text.'%')
            ->orwhere('employment_status', 'LIKE', '%'.$search_text.'%')
            ->orwhere('job_title', 'LIKE', '%'.$search_text.'%')
            ->orwhere('street', 'LIKE', '%'.$search_text.'%')
            ->orwhere('barangay', 'LIKE', '%'.$search_text.'%')
            ->orwhere('municipality', 'LIKE', '%'.$search_text.'%')
            ->get();
    
        return view('search', compact('employee'));
    }


}
