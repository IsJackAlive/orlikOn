<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pitch;
use Illuminate\Http\Request;

class PitchController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        //
    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function show($id)
    {
        $pitch = Pitch::findOrFail($id);
        $games = Game::where('pitch_id', $id) -> get();
        return view('pitches.show', [
            'pitch' => $pitch,
            'games' => $games
        ]);
    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function search()
    {
        $pitches = Pitch::all();
        return view('pitches.search', [
            'pitches' => $pitches
        ]);
    }
}
