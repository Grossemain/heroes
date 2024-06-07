<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $table = 'heroes';
    protected $fillable = ['pokemon'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
