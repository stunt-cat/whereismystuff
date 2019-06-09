<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {
    	$games = Game::all();

    	return view ('games.index', ['games' => $games]);
    }

    public function create()
    {
    	return view ('games.create');
    }

    public function show($id)
    {
    	return view ('games.show');
    }

    public function store()
    {
    	$game = new Game();

    	$game->title = request('title');
    	$game->description = request('description');
    	$game->when_loaned = request('when_loaned');
    	$game->location = request('location');

    	$game->save();

    	return redirect('/games');
    }

    public function edit($id)
    {
    	$game = Game::findOrFail($id);
    	return view ('games.edit', compact('game'));
    }

    public function update($id)
    {
    	 $game = Game::findOrFail($id);
    	 $game->title = request('title');
    	 $game->description = request('description');
    	 $game->save();

    	return redirect('/games');
    }

    public function destroy($id)
    {
    	Game::findOrFail($id)->delete();
    	
    	return redirect('/games');
    }

}