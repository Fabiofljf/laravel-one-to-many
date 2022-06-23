<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['Programming', 'Automation', 'Web design', 'Best Practices'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
