<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppilerProduct extends Model
{
    protected $table = 'supplier';
    protected $fillable = [
        'supplier'
    ];
    use HasFactory;
}
