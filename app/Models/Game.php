<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'date', 
        'max_players', 
        'description', 
        'hour_start',
        'hour_end',
        'user_id', 
        'pitch_id'
    ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pitch() {
        return $this->belongsTo(Pitch::class);
    }

    public function players() {
        return $this->hasMany(Player::class);
    }

    // public function players() {
    //     return $this->belongsTo(Player::class);
    // }
    
}
