<?php

// GameController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
        ]);
        $show = Game::create($validatedData);

        return redirect('/games')->with('success', 'Game is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $game = Game::findOrFail($id);

    //     return view('games.edit', compact('game'));
    // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'price' => 'required'
    //     ]);
    //     Game::whereId($id)->update($validatedData);

    //     return redirect('/games')->with('success', 'Game Data is successfully updated');
    // }

        public function show($id)
        {
        //    $game =  Game::find($id);
        //    return view('games.show',compact(['data']));
        }

        public function edit($id)
        {
           $game = Game::find($id);
           return view('games.edit',compact(['game']));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
             'name' => 'required',
             'price' => 'required|email'
            ]);

            Game::where('id',$id)->update($request->all());
            return redirect()->back()->with('success','Update Successfully');

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/games')->with('success', 'Game Data is successfully deleted');
    }
}
