<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_ad extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function image () {
        return $this->hasMany(image::class, 'main_id', 'id');
    }
}
