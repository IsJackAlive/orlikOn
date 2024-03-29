<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pitch;
use App\Models\Player;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

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
        // $players = Player::where('game_id', 2) -> get();
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
        *
        * @param  Request $request
        * @return Response
        */
    public function store(StoreGameRequest $request, Pitch $pitch)
    {
        $input = $request->all();
        $input['user_id'] = 4;
        $input['pitch_id'] = $pitch->id;
        // Game::create($input);
        return redirect('/test')
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
        * @param  Game $game
        * @return UpdateGameRequest
        */
    public function update(UpdateGameRequest $request, Game $game)
    {
        // 9.14
        // if ($request->user()->cannot('update', Country::class)) {
        //     abort(403);
        // }

        // 9.14
        //$this->authorize('update', $country);

        $input = $request->all();
        $game->update($input);
        return redirect()->route('games.index')
            ->with('success', 'Pomyślnie wprowadzono zmiany.');
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
        // DB::delete('DELETE FROM games WHERE id = ?', [$game->id]);
        return redirect()->route('games.index')
            ->with('success', 'Pomyślnie usunięto.');
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