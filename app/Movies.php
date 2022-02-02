<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['id', 'link', 'image'];

    protected $table = 'movies';
}
