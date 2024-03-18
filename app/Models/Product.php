<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'category_id',
        'brand_id',
        'name',
        'purchase_price',
        'sale_price',
        'product_code',
        'qty',
        'details',
        'images',
        'purchase_unit_id',
        'sale_unit_id',
        'unit_id',
        'status',
        'thumble',
        'packaging_type'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function salesUnit()
    {
        return $this->belongsTo(Unit::class, "sale_unit_id")->withTrashed();
    }

    public function productUnit()
    {
        return $this->belongsTo(Unit::class, "unit_id")->withTrashed();
    }

    public function purchaseUnit()
    {
        return $this->belongsTo(Unit::class, "purchase_unit_id")->withTrashed();
    }

    public function getImagesAttribute($value)
    {
        $values = [];
        if ($value) {
            foreach (json_decode($value) as $img) {
                $values[] = asset('storage/'.$img);
            }
            return $values;
        }

        return [];
    }

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }
}
