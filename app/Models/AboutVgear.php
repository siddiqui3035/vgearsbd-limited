<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutVgear extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title','details','status', 'serial'
    ];
}
