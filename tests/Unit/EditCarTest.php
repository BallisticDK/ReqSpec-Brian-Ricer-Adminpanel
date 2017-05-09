<?php

namespace Tests\Unit;
use App\Http\Controllers\Controller;
use App\Models\Cars\Manufacturer;
use App\Models\Cars\CarModel;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
    	$this->call('GET', '/');

	    $this->assertViewHas('carCount', 500);
    }
}
