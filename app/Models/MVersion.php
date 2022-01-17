<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MVersion extends Model
{
    protected $table = 'm_version';
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'version'
    ];
}
