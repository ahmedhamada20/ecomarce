<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'notes',
        'category_id',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/subcategory/' .$this->id.'/'. $this->photo->Filename) : null;
    }


    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class,'sub_category_id');
    }
}
