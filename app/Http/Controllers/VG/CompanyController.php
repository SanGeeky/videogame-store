<?php

namespace App\Http\Controllers\VG;

use App\Companies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::all();
        //dd($genre);
        //Console Log en la Pagina para mostrar los datos
        return view("vg.company.index", compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vg.company.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Companies();
        $company->name = $request->input('name');
        $company->description = $request->description;
        $company->website = $request->website;

        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $company->name.'.'.$extension;

            $file = $request->file('image');
            $file->move(public_path().'/images/companies/', $fileName);

            $company->image = $fileName;
        }

        $company -> save();
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Companies::findOrFail($id);
        return view("vg.company.edit", compact('companies'));
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
        $company = Companies::findOrFail($id);
        $company->name = $request->input('name');
        $company->description = $request->description;
        $company->website = $request->website;

        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $company->name.'.'.$extension;

            $file = $request->file('image');
            $file->move(public_path().'/images/companies/', $fileName);

            $company->image = $fileName;
        }

        $company -> update();
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company  = Companies::findOrFail($id);
        $company ->delete();

        return redirect()->route('companies.index');
    }
}
