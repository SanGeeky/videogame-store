<?php

namespace App\Http\Controllers\VG;

use App\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genres::all();
        //dd($genre);
        //Console Log en la Pagina para mostrar los datos
        return view("vg.genre.index", compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vg.genre.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new Genres();
        $genre->name = $request->name;
        $genre->description = $request->description;

        $file = $request->file('image');

        $image = $file->getClientOriginalName();
        $file->move(public_path().'/images/genres/', $image);

        $genre->image = $image;

        /*$file=$request->file('imagen');
        $name=$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name);
        $noticas->imagen=$name;*/

        //dd($genre);
        $genre->save();
        return redirect()->route('genres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = "Null genre for now :) ";
        return view('vg.genre.show',array('genre' => $genre,'id'=>$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$genre = "Null genre for now :) ";
        return view('vg.genre.edit',array('genre' => $genre,'id'=>$id));
        */
        $genre = Genres::findOrFail($id);
        return view("vg.genre.edit", compact('genre'));
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
        $genre = Genres::findOrFail($id);
        $genre->name = $request->name;
        $genre->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move(public_path() . '/images/genres/', $image);
            $genre->image = $image;
        }


        //dd($genre);

        $genre->update();
        return redirect()->route('genres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genres::findOrFail($id);
        $genre->delete();

        return redirect()->route('genres.index');
    }
}
