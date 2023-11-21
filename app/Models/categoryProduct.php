<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryProduct extends Model
{
    protected $table = 'categoryproduct';
    protected $fillable = [
        'category'
    ];
    use HasFactory;
}
