<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class OurTeam extends Model
{
    use HasFactory, SoftDeletes;

    const TEAM_IMAGE = 'images/teams/';

    protected $fillable = [
        'name', 'designation', 'details', 'status', 'image'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) =>
            valid_image('storage/'.self::TEAM_IMAGE, $value) ?
            asset('storage/'.self::TEAM_IMAGE.$value) :
            asset((config('commonconfig.default_image_path').'default.png'))
        );
    }
}
