<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'facebook',
        'instagram',
        'twitter',
        'youtube',

    ];

    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/setting/' .$this->id.'/'. $this->photo->Filename) : null;
    }


    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
