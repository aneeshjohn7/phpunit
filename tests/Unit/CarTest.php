<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
// import the Car
use App\Car;

class CarTest extends TestCase
{
    
    /**
     * Test the has method in the Car class
     *
     * @return void
     * 
     */
    public function test_car_has(): void
    {
        $car = new Car(["Audi", "BMW", "GMC"]); // Create a new Car
        $this->assertTrue($car->has("Audi")); // True expected
        $this->assertFalse($car->has("Honda")); // False expected

    }

    /**
     * [Description for test_car_create]
     *
     * @return [type]
     * 
     */
    public function test_car_create()
    {
        $car = new Car(["Audi"]); // Create a new Car
        $this->assertContains("BMW", $car->create("BMW"));
    }

    public function test_car_remove()
    {
        $car = new Car(["Audi", "BMW"]); // Create a new Car
        $this->assertCount(1, $car->delete("Audi"));
    }
}
