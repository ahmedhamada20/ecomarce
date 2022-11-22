<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop',
        'payment',
        'customer_support',
        'contact_Us',
        'satisfaction_guarantee',
        'shipping',
        'commercial_sales',
        'wishlist',
    ];
}
