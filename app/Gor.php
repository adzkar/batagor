<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'alamat'
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
        'nama' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Ratings for the Gor.
     */
    public function ratings()
    {
        return $this->hasMany(\App\Rating::class);
    }


    /**
     * Get the Lapangans for the Gor.
     */
    public function lapangans()
    {
        return $this->hasMany(\App\Lapangan::class);
    }


    /**
     * Get the Images for the Gor.
     */
    public function images()
    {
        return $this->hasMany(\App\Images::class);
    }

}
