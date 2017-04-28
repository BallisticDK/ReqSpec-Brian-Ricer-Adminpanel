<?php

use Illuminate\Database\Seeder;
use App\Models\Cars\Car;
use App\Models\Cars\CarModel;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     	$faker = Faker\Factory::create('da_DK');

        
        for ($i=0; $i < 5; $i++) { 
            $rand = CarModel::inRandomOrder()->get();
            //$this->command->info($rand);
            foreach($rand as $model)
            {
                $car = Car::create([
                    'manufacturer_id' => $model->manufacturer_id,
                    'car_model_id' => $model->id,
                    'horsepower' => $faker->randomDigit,
                    'ugliness' => $faker->numberBetween(1,10),
                    'car_picture_path' => "insert string here", 
                    'created_at' => $faker->dateTime
                ]);
            }
        }
    }
}
