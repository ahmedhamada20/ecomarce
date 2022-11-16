<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'notes',
        'days',
        'life_cycle',
        'disease',
        'hybrid',
        'section_one',
        'section_two',
        'section_there',
        'section_frour',
        'packet',
        'stock',
        'seeds_one',
        'seeds_two',
        'seeds_there',
        'type',
        'code_prodcut',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/product/' . $this->id . '/' . $this->photo->Filename) : null;
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function typeProduct()
    {
        return $this->hasMany(TypeProdcut::class, 'product_id');
    }

    public function categoryProdut()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }


    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
    }
}
