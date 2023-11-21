<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageProduct extends Model
{
    protected $table = 'imageProduct';
    protected $fillable = [
        'id', 'idProduct', 'linkImage'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'idProduct');
    }
    use HasFactory;
}
