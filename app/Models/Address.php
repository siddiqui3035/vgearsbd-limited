<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'address','city','country','postal_code'
    ];

    public function user ()
    {
        return $this->hasOne(User::class);
    }

    protected function fullAddress(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => sprintf(
                "%s %s %s, %s",
                $attributes['address'] ?? '',
                $attributes['city'] ?? '',
                $attributes['country'] ?? '',
                $attributes['postal_code'] ?? ''
            )
        );
    }
}
