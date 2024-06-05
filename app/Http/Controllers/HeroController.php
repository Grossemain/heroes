<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\Skill;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heros = Hero::all();
        return view('heros.index', compact('heros'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Hero::all();
        return view('heros.create', compact('skills'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pokemon' => 'required',
            'type' => 'required',
            'type2' => 'required',
            'sous_evolution'=> 'required',
            'evolution'=> 'required',
            'mega_evolution'=> 'required',
            'forme_normale'=> 'required',
            'generation'=> 'required',
            'region'=> 'required',
            'skill_id' => 'required'
            ]);

        Hero::create([
            'pokemon'=>$request->pokemon,
            'type'=>$request->type,
            'type2'=>$request->type2,
            'sous_evolution'=>$request->sous_evolution,
            'evolution'=>$request->evolution,
            'mega_evolution'=>$request->mega_evolution,
            'forme_normale'=>$request->forme_normale,
            'generation'=>$request->generation,
            'region'=>$request->region,
            'skill_id'=>$request->skill_id,

        ]);

        return redirect()->route('heros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
