<?php

namespace App\Http\Controllers\Cars;

use App\Models\Cars\CarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cars\Manufacturer;

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Manufacturer::get();
        return view('/carmodels/insert', compact('manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carModel = new CarModel();
        $carModel->name = $request->Input('name');
        $carModel->manufacturer_id = $request->Input('manufacturer');
        $carModel->save();
        return redirect(route('admin.main'));
    }


    public function edit($id)
    {
        $carModel = CarModel::find($id);
        $manufacturers = Manufacturer::get();
        return view('/carmodels/edit', compact('carModel', 'manufacturers')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carModel = CarModel::find($id);

        $carModel->name = $request->Input('name');
        $carModel->manufacturer_id = $request->Input('manufacturer');
        $carModel->save();

        return redirect(route('admin.main'));
    }


    public function destroy($id)
    {
        CarModel::find($id)->delete();
        return back();
    }
}
