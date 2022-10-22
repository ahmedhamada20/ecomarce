<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/category/' .$this->id.'/'. $this->photo->Filename) : null;
    }

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class,'category_id');
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
