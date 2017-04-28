<?php

use Illuminate\Database\Seeder;
use App\Models\Cars\CarModel;
use App\Models\Cars\Manufacturer;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) 
        { 
            $rand = Manufacturer::inRandomOrder()->get();

           	$faker = Faker\Factory::create('da_DK');
            foreach($rand as $manufacturer)
            {
                $car = CarModel::create([
                    'name' => $faker->word,
                    'manufacturer_id' => $manufacturer->id
                ]);
            }
        }
    }
}
