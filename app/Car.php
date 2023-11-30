<?php
# app/Car.php

namespace App;

class Car
{
    /**
     * @var array
     */
    protected $brands = [];

    
    /**
     * Fill the car with brands
     *
     * @param array $brands
     * 
     */
    public function __construct($brands = [])
    {
        $this->brands = $brands;
    }

    /**
     * Check if the given brand is exist or not
     *
     * @param mixed $brand
     * 
     * @return bool
     * 
     */
    public function has($brand)
    {
        return in_array($brand, $this->brands);
    }

    /**
     * Create new brand
     *
     * @param mixed $brand
     * 
     * @return array
     * 
     */
    public function create($brand)
    {
        array_push($this->brands, $brand);
        return $this->brands;
    }

    /**
     * Delete a brand
     *
     * @param mixed $brand
     * 
     * @return [type]
     * 
     */
    public function delete($brand)
    {
        if (($key = array_search($brand, $this->brands)) !== false) {
        unset($this->brands[$key]);
        }
        return $this->brands;
    }
}