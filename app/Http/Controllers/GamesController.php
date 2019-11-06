<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Game;
use App\Manufacturer;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
        $manufacturers = Manufacturer::all();
    
    	return view ('games.index', [
            'games' => $games,
            'manufacturers' => $manufacturers,
            'title' => null,
            'description' => null,
            'manufacturer_id' => null,
        ]);
    }

    public function filter(Request $request)
    {
        if($request->manufacturer_id){
            $games = Game::where('title', 'like', '%'.$request->title.'%')
                ->where('description', 'like', '%'.$request->description.'%')
                ->where('manufacturer_id', '=', $request->manufacturer_id)
                ->get();
            } else {
                $games = Game::where('title', 'like', '%'.$request->title.'%')
                ->where('description', 'like', '%'.$request->description.'%')
                ->get();
            }
        
        $manufacturers = Manufacturer::all();

        return view ('games.index', [
            'games' => $games,
            'manufacturers' => $manufacturers,
            'title' => $request->title,
            'description' => $request->description,
            'manufacturer_id' => $request->manufacturer_id,
        ]);
    }


    public function create()
    {
        $manufacturers = Manufacturer::pluck('name', 'id');
    	return view ('games.create', ['manufacturers' => $manufacturers]);
    }

    public function show(Game $game)
    {
    	return view ('games.show', compact('game'));
    }

    public function store()
    {
    	Game::create(request(['title', 'manufacturer_id', 'description', 'when_loaned', 'location']));
    	
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