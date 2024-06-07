<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class HeroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


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
            'sous_evolution' => 'required',
            'evolution' => 'required',
            'mega_evolution' => 'required',
            'forme_normale' => 'required',
            'generation' => 'required',
            'region' => 'required',
            'skill_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $filename = "";
        if ($request->hasFile('image')) {
            // On récupère le nom du fichier avec son extension, résultat $filenameWithExt : "jeanmiche.jpg"
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // On récupère l'extension du fichier, résultat $extension : ".jpg"
            $extension = $request->file('image')->getClientOriginalExtension();
            // On créer un nouveau fichier avec le nom + une date + l'extension, résultat $fileNameToStore :"jeanmiche_20220422.jpg"
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            // On enregistre le fichier à la racine /storage/app/public/uploads, ici la méthode storeAs défini déjà le chemin /storage/app
            $request->file('image')->storeAs('public/uploads', $filename);
        } else {
            $filename = Null;
        }

        Hero::create([
            'pokemon' => $request->pokemon,
            'type' => $request->type,
            'type2' => $request->type2,
            'sous_evolution' => $request->sous_evolution,
            'evolution' => $request->evolution,
            'mega_evolution' => $request->mega_evolution,
            'forme_normale' => $request->forme_normale,
            'generation' => $request->generation,
            'region' => $request->region,
            'skill_id' => $request->skill_id,
            'image' => $filename,

        ]);

        return redirect()->route('heros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hero = Hero::findOrfail($id);
        return view('heros.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        if (Auth::user()->id == $hero->id) {
            return view('heros.edit', compact('hero'));
        } else {
            return redirect()->route('home')->withErrors(['erreur' => 'Vous n\'êtes pas autorisé à modifier ce post']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateHero = $request->validate([
            'pokemon' => 'required',
            'type' => 'required',
            'type2' => 'required',
            'sous_evolution' => 'required',
            'evolution' => 'required',
            'mega_evolution' => 'required',
            'forme_normale' => 'required',
            'generation' => 'required',
            'region' => 'required',
            'skill_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        Hero::whereId($id)->update($updateHero);
        return redirect()->route('heros.index')
            ->with('success', 'Le post mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();
        return redirect('/heros')->with('success', 'Post supprimé avec succès');
    }
}
