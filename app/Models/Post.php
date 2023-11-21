<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'title', 'images', 'datePost', 'likes', 'categories', 'content', 'slug'
    ];
    public function getSlugAttribute(){
        return Str::slug($this->title);
    }
}
