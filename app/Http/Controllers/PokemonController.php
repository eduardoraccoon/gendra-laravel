<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\User;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::select('users.id','pokemon.number_poke1', 'pokemon.number_poke2', 'pokemon.number_poke3', 'pokemon.number_poke4', 'pokemon.number_poke5', 'pokemon.number_poke6','users.name')
        ->join('users', 'pokemon.user_id', '=', 'users.id')
        ->get();
        return $pokemons;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->save();

        $last_id = User::all()->last()->id;
        $pokemon = new Pokemon();
        $pokemon->user_id = $last_id;
        $pokemon->number_poke1 = $request->number_poke1;
        $pokemon->number_poke2 = $request->number_poke2;
        $pokemon->number_poke3 = $request->number_poke3;
        $pokemon->number_poke4 = $request->number_poke4;
        $pokemon->number_poke5 = $request->number_poke5;
        $pokemon->number_poke6 = $request->number_poke6;
        $pokemon->save();
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
