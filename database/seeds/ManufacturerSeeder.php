<?php

use Illuminate\Database\Seeder;
use App\Models\Cars\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	$faker = Faker\Factory::create('da_DK');
        foreach(range(1, 20) as $index)
        {
            $car = Manufacturer::create([
                'name' => $faker->company
            ]);
        }
    }
}
