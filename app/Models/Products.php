<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "new_products";
    protected $fillable = ['nameProduct', 'codeProduct', 'price', 'prmPrice', 'quantity', 'category', 'supplier',
    'status', 'avtProduct', 'detailProduct', 'slug'];
    public function images()
    {
        return $this->hasMany(imageProduct::class, 'idProduct');
    }
    public function getSlugAttribute(){
        return Str::slug($this->nameProduct);
    }
}
