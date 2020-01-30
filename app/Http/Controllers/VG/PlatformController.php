<?php

namespace App\Http\Controllers\VG;

use App\Platforms;
use App\Companies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platforms::all();
        $companies = Companies::all();
        return view("vg.platform.index", compact('platforms', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $platform = new Platforms();
        $platform->name = $request->input('name');
        $platform->aliases = $request->aliases;
        $platform->description = $request->description;
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $platform->name.'.'.$extension;

            $file = $request->file('image');
            $file->move(public_path().'/images/platforms/', $fileName);

            $platform->image = $fileName;
        }

        $platform->release_date = $request->release_date;
        $platform->company_id = $request->company_id;
        $platform -> save();
        return redirect()->route('platforms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $platform = Platforms::findOrFail($id);
        return view('vg.platform.show',compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platform = Platforms::findOrFail($id);
        $companies = Companies::all();
        return view("vg.platform.edit", compact('platform', 'companies'));
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
        $platform = Platforms::findOrFail($id);
        $platform->name = $request->input('name');
        $platform->aliases = $request->aliases;
        $platform->description = $request->description;
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $platform->id.'.'.$extension;

            $file = $request->file('image');
            $file->move(public_path().'/images/games/', $fileName);

            $platform->image = $fileName;
        }
        $platform->release_date = $request->release_date;
        $platform->company_id = $request->company_id;
        $platform -> save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $platform = Platforms::findOrFail($id);
        $platform->delete();
        return $this->index();
    }
}
