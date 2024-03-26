<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'address_id', 'product_id',
        // 'discount_id',
        'product_qty', 'product_price', 'total_price',
        'payment_method', 'status','order_number'
    ];

    public static $statusOptions = ['pending', 'processing', 'shipped', 'delivered'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
