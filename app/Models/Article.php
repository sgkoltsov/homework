<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // public $guarded = [];
    public $fillable = ['slug', 'title', 'short', 'body', 'published'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
