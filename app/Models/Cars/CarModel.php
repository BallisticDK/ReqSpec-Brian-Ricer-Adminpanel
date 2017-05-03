<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function manufacturer()
    {
    	return $this->belongsTo(Manufacturer::class);
    }

    public function cars()
    {
    	return $this->hasMany(Car::class);
    }
}
