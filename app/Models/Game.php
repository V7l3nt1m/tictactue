<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Game extends Model
{
    use HasFactory;
    
    protected $fillable = ['player1_id', 'player2_id', 'id', 'winner', 'looser'];

}

