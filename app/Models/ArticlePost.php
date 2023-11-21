<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlePost extends Model
{
    protected $table = 'articlePost';
    protected $fillable = [
        'title', 'images', 'datePost', 'likes', 'categories', 'content'
    ];
    use HasFactory;
}
