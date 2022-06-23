<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = ['title', 'thumb', 'slug', 'description'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}