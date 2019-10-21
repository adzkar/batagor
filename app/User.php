<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'phone_number' => 'string',
        'type' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Ratings for the User.
     */
    public function ratings()
    {
        return $this->hasMany(\App\Rating::class);
    }


    /**
     * Get the Carts for the User.
     */
    public function carts()
    {
        return $this->hasMany(\App\Cart::class);
    }


    /**
     * Get the Detail_carts for the User.
     */
    public function detailCarts()
    {
        return $this->hasMany(\App\Detail_cart::class);
    }

}