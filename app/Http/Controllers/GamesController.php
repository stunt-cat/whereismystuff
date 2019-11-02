<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
    
    	return view ('games.index', [
            'games' => $games,
            'title' => null,
            'description' => null,
        ]);
    }

    public function filter(Request $request)
    {
        $games = DB::table('games')
                ->where('title', 'like', '%'.$request->title.'%')
                ->where('description', 'like', '%'.$request->description.'%')
                ->get();

        return view ('games.index', [
            'games' => $games,
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }


    public function create()
    {
    	return view ('games.create');
    }

    public function show(Game $game)
    {
    	return view ('games.show', compact('game'));
    }

    public function store()
    {
    	Game::create(request(['title', 'description', 'when_loaned', 'location']));
    	
    	return redirect('/games');
    }

    public function edit(Game $game)
    {
    	return view ('games.edit', compact('game'));
    }

    public function update(Game $game)
    {
    	$game->update(request('title', 'description', 'when_loaned', 'location'));
    	
    	return redirect('/games');
    }

    public function destroy(Game $game)
    {
    	$game->delete();
    	
    	return redirect('/games');
    }

}