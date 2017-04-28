<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create('da_DK');
        foreach(range(1, 100) as $index)
        {
            $car = User::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => $faker->password,
            ]);
        }
    }
}
