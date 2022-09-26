<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
