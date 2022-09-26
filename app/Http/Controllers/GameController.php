<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pitch;
use App\Models\Player;
use App\Http\Requests\StoreGameRequest;
use Illuminate\Http\Client\Request;
use Label84\HoursHelper\Facades\HoursHelper; 

class GameController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        $games = Game::all();
        $players = Player::all();
        return view('games.index', [
            'games' => $games,
            'players' => $players
        ]);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function new($pitch_s)
    {
        $pitch = Pitch::FindOrFail($pitch_s);
        return view('games.new', [
            'pitch' => $pitch
        ]);
    }

    /**
        * Store a newly created resource in storage.
        *f
        * @param  Request $request
        * @return Response
        */
    public function store(StoreGameRequest $request)
    {
        $input = $request->all();
        Game::create($input);
        return redirect()->route('games.index')
            ->with('success', 'Game is successfully saved');
    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        $players = Player::where('game_id', $id) -> get();
        return view('games.show', [
            'game' => $game,
            'players' => $players
        ]);
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', [
            'game' => $game
        ]);
    }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string|min:3|max:25',
            'date' => 'required|date',
            'max_players' => 'required|integer|min:1',
            'description' => 'required|string|min:3|max:250',
            'hour_start' => 'required|integer|min:0|max:24',
            'hour_end' => 'required|integer|min:0|max:24',
            'pitch_id' => 'required|integer|min:0',
        ]);

        Game::create($validateData);
        return redirect()->route('games.index')
            ->with('success', 'Game is successfully updated');
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect('/games')
            ->with('success', 'Game Data is successfully deleted');
    }

    public function join($id) 
    {
        $game = Game::findOrFail($id);
        $players = Player::where('game_id', $id) -> get();
        return view('games.join', [
            'game' => $game,
            'players' => $players
        ]);
    }
}