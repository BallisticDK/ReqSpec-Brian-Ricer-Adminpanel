<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ManufacturerSeeder::class);
      	$this->call(CarModelSeeder::class);
        $this->call(CarSeeder::class);
    }
}
