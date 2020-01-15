<?php

namespace App\Http\Controllers\VG;

use App\Videogames;
use App\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Videogames::all();
        $genres = Genres::all();
        return view("vg.game.index", compact('games', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $g = new Videogames();
        $g->name = $request->input('name');
        $g->aliases = $request->aliases;
        $g->description = $request->description;
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $g->id.'.'.$extension;
            $request->image->storeAs('public',$fileName);
            $g->image = $fileName;
        }
        $g->original_release_date = $request->original_release_date;
        $g->genre_id = $request->genre_id;
        $g -> save();
        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Videogames::findOrFail($id);
        return view('vg.game.show',array('game' => $game,'id'=>$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Videogames::findOrFail($id);
        $genres = Genres::all();
        return view("vg.game.edit", compact('game', 'genres'));
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
        $g = Videogames::findOrFail($id);
        $g->name = $request->input('name');
        $g->aliases = $request->aliases;
        $g->description = $request->description;
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $g->id.'.'.$extension;
            $request->image->storeAs('public',$fileName);
            $g->image = $fileName;
        }
        $g->original_release_date = $request->original_release_date;
        $g->genre_id = $request->genre_id;
        $g -> save();
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
        $game = Videogames::findOrFail($id);
        $game->delete();
        return $this->index();
    }
}
