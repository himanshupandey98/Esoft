<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('employee.create',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes=request()->validate([
            'company_id'=>'',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'mobileno'=>'required',
            'profile_picture'=>'image',
           

        ]);
        if(request('profile_picture')){
        $attributes['profile_picture']=request()->file('profile_picture')->store('public');
        }
        Employee::create($attributes);

        return "Data Created";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $employee=Employee::all()->where('company_id',$id);
        $company=Company::find($id);
        return view('employee.index',['employee'=>$employee,'company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);
        return view('employee.edit',['employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes=request()->validate([
            
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'mobileno'=>'required',
            'profile_picture'=>'image',
           

        ]);
        if(request('profile_picture')){
        $attributes['profile_picture']=  request()->file('profile_picture')->store('employee');
        }
        Employee::where('id',$id)->update($attributes);
        $emp=Employee::find($id);
        $emp=$emp->company_id;
        
       return "Data Updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id',$id)->delete();

        return redirect('/employee');
    }
}
