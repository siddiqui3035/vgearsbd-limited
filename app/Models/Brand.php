<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    const BRAND_IMAGE = 'images/brands/';

    protected $fillable = [
        'name', 'image', 'status',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) =>
            valid_image('storage/'.self::BRAND_IMAGE, $value) ?
            asset('storage/'.self::BRAND_IMAGE.$value) :
            asset((config('commonconfig.default_image_path').'default.png'))
        );
    }
}
