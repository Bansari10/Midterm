<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testInsertCar()
    {
        $car = new Car();
        $car->make ='ford';
        $car->model ='SUV';
        $car->year ='2011';
        $this->assertTrue($car->save());

    }
    public function test()
    {
        $this->assertTrue(true);
    }
}
