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
    public function tournament(){
        return $this->belongsTo(Tournament::class, 'tournament_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
