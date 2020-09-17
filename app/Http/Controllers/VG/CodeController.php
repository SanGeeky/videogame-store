<?php

namespace App\Http\Controllers\VG;

use App\Code;
use App\User;
use App\Videogames;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = Code::all();
        return view("vg.code.index", compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vg.code.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $new_code = new Code();


        $new_code->code = $new_code->generateCode();
        $new_code->status = 0;

        //dd($code);
        $new_code->save();
        return redirect()->route('codes.index');
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
        //
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function purchase(Request $request)
    {
        $user_id = $request->user_id;
        $game_id = $request->game_id;
        $code_exist = DB::table('codes')->where('code', $request->code)->get();

        foreach ($code_exist as $code)
        {
            $code_id = $code->id;
        }

        $game = Videogames::findOrFail($game_id);
        $user = User::findOrFail($user_id);
        $code = Code::findOrFail($code_id);

        if(sizeof($code_exist) == 0)
        {
            return view('vg.game.show',compact('game'));
        }
        else
        {
            $user->purchases()->attach($game_id);
            //$game->purchases()->attach($user_id);

            $code->status = 1;

            $code->update();

            //dd($user_id, $game_id, $code_exist);
            return view('vg.game.show',compact('game'));
        }



        //return redirect()->route('codes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $code = Code::findOrFail($id);
        $code->delete();


        return redirect()->route('codes.index');
    }
}
