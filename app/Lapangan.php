<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'harga', 'detail', 'gor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'harga' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Carts for the Lapangan.
     */
    public function carts()
    {
        return $this->hasMany(\App\Cart::class);
    }


    /**
     * Get the Images for the Lapangan.
     */
    public function images()
    {
        return $this->hasMany(\App\Images::class);
    }


    /**
     * Get the Gor for the Lapangan.
     */
    public function gor()
    {
        return $this->belongsTo(\App\Gor::class);
    }

}
