<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $response =$browser->visit('/login')
                    ->type('email', 'aneesh85@gmail.com')
                    ->type('password', 'aneesh123')
                    ->press('Login');
                        $response->assertSee("Dashboard");

        });
    }
}
