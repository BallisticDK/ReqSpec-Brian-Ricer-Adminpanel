<?php

namespace App\Http\Controllers\Cars;

use App\Models\Cars\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cars\Manufacturer;
use App\Models\Cars\CarModel;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars.home', compact('cars'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', ['car' => $car]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Manufacturer::get();
        $carModels = CarModel::get();
        return view('/cars/insert', compact('manufacturers', 'carModels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();

        $file = $request->file('carpicture');
        //mkdir('uploads');

        $file->move('uploads', $file->getClientOriginalName());
        $car->manufacturer_id = $request->Input('manufacturer');
        $car->car_model_id = $request->Input('carmodel');
        $car->horsepower = $request->Input('horsepower');
        $car->ugliness = $request->Input('ugliness');
        $car->car_picture_path = "uploads/" . $file->getClientOriginalName();

        $car->save();
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
