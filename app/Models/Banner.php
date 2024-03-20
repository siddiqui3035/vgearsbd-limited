<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory, SoftDeletes;

    const BANNER_IMAGE = 'images/banners/';

    protected $fillable = [
        'title_one',
        'title_two',
        'short_details',
        'image',
        'status'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) =>
            valid_image('storage/'.self::BANNER_IMAGE, $value) ?
            asset('storage/'.self::BANNER_IMAGE.$value) :
            asset((config('commonconfig.default_image_path').'default.png'))
        );
    }
}
