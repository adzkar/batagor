<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rate', 'komentar', 'user_id', 'gor_id'
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
        'rate' => 'integer',
        'komentar' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the User for the Rating.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


    /**
     * Get the Gor for the Rating.
     */
    public function gor()
    {
        return $this->belongsTo(\App\Gor::class);
    }

}
