<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_name', 'gor_id', 'lapangan_id'
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
        'file_name' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Gor for the Images.
     */
    public function gor()
    {
        return $this->belongsTo(\App\Gor::class);
    }


    /**
     * Get the Lapangan for the Images.
     */
    public function lapangan()
    {
        return $this->belongsTo(\App\Lapangan::class);
    }

}
