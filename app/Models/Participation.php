<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;
    protected $table = 'participations';
    protected $guarded = [];
    protected $fillable = ['user_id', 'tournament_id'];
}
