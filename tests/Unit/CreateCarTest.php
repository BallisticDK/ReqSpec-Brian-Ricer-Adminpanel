<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Cars\Car;
use App\Http\Controllers\Controller;

class CreateCarTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
   /* public function test_if_cars_are_inserted_into_database()
    {
        $first 	= factory(\App\Models\Cars\Car::class)->create();
        $second	= factory(\App\Models\Cars\Car::class)->create();
        $cars = \App\Models\Cars\Car::all()->toArray();
        $this->assertCount(2, $cars);
        $this->assertEquals([
        	[
                'id' => $first->id,
                'manufacturer_id' => $first->manufacturer_id,
                'car_model_id' => $first->car_model_id,
                'car_picture_path' => $first->car_picture_path,
        		'horsepower' => $first->horsepower,
        		'ugliness' => $first->ugliness,
                'created_at' => $first->created_at,
                'updated_at' => $first->updated_at,
        	],
        	[
        		'id' => $second->id,
                'manufacturer_id' => $second->manufacturer_id,
                'car_model_id' => $second->car_model_id,
                'car_picture_path' => $second->car_picture_path,
                'horsepower' => $second->horsepower,
                'ugliness' => $second->ugliness,
                'created_at' => $second->created_at,
                'updated_at' => $second->updated_at,
        	]
    	], $cars);
    }*/
}
