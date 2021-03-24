<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body'];
    // protected $guarded = [];
    // public function scopeLatestFirst()
    // {
    //     return $this->latest()->first();
    // }

    // public function scopeLatestPost()
    // {
    //     return $this->latest()->get();
    // }
}
