<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialLink extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type', 'link','user_id'
    ];

    public function user ()
    {
        return $this->hasOne(User::class);
    }
}
