<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'release_year',
        'genre',
        'description',
        'image',
        'watch_url'
    ];
}
