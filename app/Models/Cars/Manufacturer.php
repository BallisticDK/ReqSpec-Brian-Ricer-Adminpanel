<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
	public function carModels()
	{
		return $this->hasMany(CarModel::class);
	}
	public function cars()
   	{
   		return $this->hasMany(Car::class);
   	}
}
