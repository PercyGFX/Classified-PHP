<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function vehicleads() {

        return $this->hasMany(vehicle_ad::class, 'user_id', 'id');
    }
}



