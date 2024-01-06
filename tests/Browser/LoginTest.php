<?php

namespace Tests\Browser;

use App\Models\User;
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
            $user = User::factory()->create();
            $browser->visit('/login')
                    ->type('email',$user->email)
                    ->type('password','password')
                    ->press('Log in')
                    ->assertPathIs('/tweet')
                    ->assertSee('つぶやきアプリ')
                    ->screenshot('test');
        });
    }
}
