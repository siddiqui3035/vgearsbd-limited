<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Blog extends Model
{
    use HasFactory;

    const BLOG_IMAGE = 'images/blogs/';

    protected $fillable = [
        'category', 'title', 'short_description', 'long_description', 'image', 'status'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) =>
            valid_image('storage/'.self::BLOG_IMAGE, $value) ?
            asset('storage/'.self::BLOG_IMAGE.$value) :
            asset((config('commonconfig.default_image_path').'default.png'))
        );
    }
}
