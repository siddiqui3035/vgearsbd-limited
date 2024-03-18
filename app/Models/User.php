<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Attribute;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'whatsapp_number',
        'image',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses ()
    {
        return $this->hasMany(Address::class);
    }

    public function updateProcess($request, $updateData){
        $fileName = Str::snake($request->get('first_name')).time();

        if($request->hasFile('image')){
            if($this->image){
                Storage::delete($this->image);
            }

            $profileFileName = $fileName. '.'. $request->file('image');
            $updateData['image'] = Storage::putFileAs('images/profile', $request->file('image'), $profileFileName);

            if($this->update($updateData)){
                return true;
            }
            return false;
        }
    }

    protected function myAccountImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value != '' ? asset('storage/'.$value) : '',
        );
    }
}
