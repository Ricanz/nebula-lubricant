<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'title', 'description', 'short_desc', 'image', 'slug', 'status', 'isPrimary', 'created_at', 'updated_at'
    ];
}
