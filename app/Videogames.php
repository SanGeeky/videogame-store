<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videogames extends Model
{
    protected $table = 'games';
    protected $fillable = ['name', 'aliases', 'description', 'image', 'release_date', 'genre_id'];

    public function genre(){
        return $this->belongsTo(Genres::class);
    }

    public function platforms(){
        return $this->belongsToMany(Platforms::class)->withTimestamps;
    }
}
