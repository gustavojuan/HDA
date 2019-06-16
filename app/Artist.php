<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['firstname','lastname'];

    public function artworks() {
        return $this->hasMany('App\Artwork');
    }
}
