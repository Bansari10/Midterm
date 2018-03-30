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
    public function testUpdateYear()
    {
        $car = Car::all()->last();
        $car-> where('year', '2011')
            -> update(['year' => '2000']);
        $this->assertTrue($car->save());

    }
    public function testDeleteCar()
    {
        $car = Car::all()->last();
        $this->assertTrue($car->delete());
    }
    public function testCountCar()
    {
        $cars = Car::all();
        $carCount = count($cars);
        $this->assertEquals(50,$carCount);
        $this->assertInternalType("int",$carCount);
    }
    public function testCarYear()
    {
        $car = Car::find(1);
        $year = (int) $car->year;
        $this->assertInternalType("int",$year);
    }
    public function testCarMake()
    {
        $car = Car::find(1);
        $this->assertContains($car->make, ["ford", "honda", "toyota"]);
    }
    public function testCarModel()
    {
        $car = Car::find(1);
        $model = (string) $car->model;
        $this->assertInternalType("string",$model);
    }


}
