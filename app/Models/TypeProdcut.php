<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProdcut extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'product_id',
        'type',
        'count',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
