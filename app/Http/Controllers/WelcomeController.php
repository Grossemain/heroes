<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Skill;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heros = Hero::all();
        $skills = skill::all();
        return view('welcome', [
            'heros' => $heros,
            'skills' => $skills
        ]);
    }

}