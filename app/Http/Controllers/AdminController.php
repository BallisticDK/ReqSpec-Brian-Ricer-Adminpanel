<?php

namespace App\Http\Controllers;
use App\Models\Cars\Car;
use App\Models\Cars\CarModel;
use App\Models\Cars\Manufacturer;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminPage()
    {
    	$carCount = Car::count();
    	$carModelCount = CarModel::count();
    	$manufactuerCount = Manufacturer::count(); 
    	return view('admin', compact('carCount','carModelCount','manufactuerCount'));
    }
}
