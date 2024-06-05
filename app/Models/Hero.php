<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'pokemon', 
        'type', 
        'type2',
        'sous_evolution',
        'evolution',
        'mega_evolution',
        'forme_normale',
        'generation',
        'region',
        'skill_id',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
