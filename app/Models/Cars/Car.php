<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   	public function carModel()
   	{
   		return $this->belongsTo(CarModel::class);
   	}

   	public function manufacturer()
   	{
   		return $this->belongsTo(Manufacturer::class);
   	}
}
