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
        //dd($genre);
        //Console Log en la Pagina para mostrar los datos
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
        error_log("storing... ".$request);
        $g = new Videogames();
        $g->name = $request->input('name');
        $g->aliases = $request->aliases;
        $g->description = $request->description;
        $g->image = $request->image;
        $g->original_release_date = $request->original_release_date;
        $g->genre_id = $request->genre_id;
        error_log("store result:".$g -> save());
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
        $game = "Null game for now :) ";
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
        $game = "Null game for now :) ";
        return view('vg.game.edit',array('game' => $game,'id'=>$id));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
