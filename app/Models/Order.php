<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const ORDERCOMPTITED = 0;
    const ORDERSUCCESS = 1;
    const ORDERERROR = 2;

    protected $fillable = [
        'user_id',
        'total',
        'quantity',
        'status',
        'code',
    ];

    public function status()
    {
        switch ($this->status) {
            case 0 :
                $result = 'new Order';
                break;
            case 1 :
                $result = 'Completed';
                break;
            case 2 :
                $result = 'process';
                break;
        }

        return $result;
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Product::class,'order_product','order_id','product_id');
    }
}
