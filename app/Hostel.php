<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TownshipsTableSeeder;

class Hostel extends Model
{
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    public function township() {
        return $this->belongsTo(Township::class);
    }
}
