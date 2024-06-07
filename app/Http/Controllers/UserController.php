<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required',
            'email'=>'email',
            'password'=>'password',
            ]);

        User::create([
            'pseudo'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect()->route('users.index')
        ->with('success', 'L\utilisateur a été ajouté avec succès !');
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
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'pseudo' => 'required|max:40',
            'image' => 'nullable||string',
        ]);

        $user->update($request->all());
        return back()->with('message', 'Le compte a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // on vérifie que c'est bien l'utilisateur connecté qui fait la demande de suppression
        // (les id doivent être identiques)
        if (Auth::user()->id == $user->id) {
            $user->delete();
            return redirect()->route('/users')->with('message', 'Le compte a bien été supprimé');
        } else {
            return redirect()->back()->withErrors(['erreur' => 'Suppression du compte impossible']);
        }

    }
}
