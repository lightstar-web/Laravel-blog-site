<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'min_to_read',
        'image_path',
        'is_published'
    ];
    use HasFactory;
}
