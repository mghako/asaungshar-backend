<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
