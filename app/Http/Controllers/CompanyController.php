<?php

namespace App\Http\Controllers;
Use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::all();
        return view('company.index',['company'=>$company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
            'company_name'=>'required',
            'email'=>'required',
            'logo'=>'image',
            'website'=>'required',

        ]);
        if(request('logo')){
        $attributes['logo']=  request()->file('logo')->store('app/public/company');
        }
        Company::create($attributes);

        return redirect('/esoft');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('company.edit',['company'=>Company::find($id)]);
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
            'company_name'=>'required',
            'email'=>'required',
            'logo'=>'image',
            'website'=>'required',

        ]);
        if(request('logo')){
        $attributes['logo']=  request()->file('logo')->store('public');
        }
        Company::where('id',$id)->update($attributes);

        return redirect('/esoft');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
        Company::where('id',$id)->delete();

        return redirect('/esoft');
    }
}
