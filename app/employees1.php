<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class em extends Model
{
    protected $fillable = ['title', 'genre', 'release_year', 'poster'];
}