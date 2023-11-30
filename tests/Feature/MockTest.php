<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class MockTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_mock_http()
    {
        // This api is supposed to return a list of countries in JSON format,
        // we can mock it so that it only returns Italy.
        Http::fake([
            'https://restcountries.com/v3.1/all' => Http::response(
                [
                    'name' => 'Italy',
                    'code' => 'ITs'
                ],
                200
            ),
        ]);

        $response = Http::get('https://restcountries.com/v3.1/all');

        $this->assertJsonStringEqualsJsonString(
            $response->body(),
            json_encode([
                'name' => 'Italy',
                'code' => 'ITs'
            ],)
        );
    }
}

