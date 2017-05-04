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
        $cars = Car::paginate(30);
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
        return redirect(route('cars.all'));
    }


    public function edit($id)
    {
        $manufacturers = Manufacturer::get();
        $carModels = CarModel::get();
        $car = Car::find($id);
        return view('/cars/edit', compact('car' ,'carModels', 'manufacturers')); 
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
        $car = Car::find($id);
        $car->manufacturer_id = $request->Input('manufacturer');
        $car->car_model_id = $request->Input('carmodel');
        $car->horsepower = $request->Input('horsepower');
        $car->ugliness = $request->Input('ugliness');
        if($request->file('carpicture') != null)
        {
            $file = $request->file('carpicture');
            $file->move('uploads', $file->getClientOriginalName());
            $car->car_picture_path = "uploads/" . $file->getClientOriginalName();
        }
        $car->save();
        return redirect(route('cars.all'));
    }


    public function destroy($id)
    {
        Car::find($id)->delete();
        return back();
    }



    public function getmodels()
    {
        $id = $_POST['id'];
        $carModels = CarModel::where('manufacturer_id', $id)->get();
        return json_encode($carModels);
    }

}
