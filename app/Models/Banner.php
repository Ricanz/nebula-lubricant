<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // use HasFactory;
    protected $table = 'banners';
    protected $fillable = [
        'title', 'image', 'description', 'short_desc', 'status', 'created_at', 'updated_at'
    ];
}
