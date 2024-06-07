<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;
use App\Models\Hero;

class SearchController extends Controller
{
       /**
     * Afficher le formulaire de recherche et les résultats.
     */
    public function index(Request $request)
    {
        
        $query = $request->input('query');
        $searches = [];

        if ($query) {
            $searches = Search::where('heroes.pokemon', 'LIKE', "%$query%")->get();
           //->orWhere('heroes.region', 'like', "%$query%")
        }

        return view('searches.index', compact('searches', 'query'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $searches = Search::findOrfail($id);
        return view('search.show', compact('search'));
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
