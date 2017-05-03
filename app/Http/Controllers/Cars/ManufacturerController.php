<?php

namespace App\Http\Controllers\Cars;

use App\Models\Cars\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::get();
        return view('manufacturers.index', compact('manufacturers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        $carModels = $manufacturer->carModels;
        $cars = $manufacturer->cars;
        $carsCount = sizeof($cars);
        return view('manufacturers.show', compact('carModels', 'manufacturer', 'carsCount', 'cars'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturers/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->name = $request->Input('name');
        $manufacturer->save();
        return redirect(route('manufacturers.all'));
    }


    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('manufacturers/edit', compact('manufacturer'));
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
        $manufacturer = Manufacturer::find($id);
        $manufacturer->name = $request->Input('name');
        $manufacturer->save();

        return redirect(route('manufacturers.all'));
    }


    public function destroy($id)
    {
        Manufacturer::find($id)->delete();
        return back();
    }
}
