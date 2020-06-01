<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function hostels() {
        return $this->hasMany(Hostel::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
}
