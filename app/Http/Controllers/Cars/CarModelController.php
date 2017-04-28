<?php

namespace App\Http\Controllers\Cars;

use App\Models\Cars\CarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModels = carModel::get();
        return view('carmodels.index', compact('carModels'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        $manufacturer   = $carModel->manufacturer;
        $cars           = $carModel->cars;
        $carsCount      = sizeof($cars);
        return view('carmodels.show', compact('carModel', 'manufacturer', 'cars', 'carsCount'));
    }
}
