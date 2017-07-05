<?php

namespace Tests\Browser;

use App;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{

    public function testLogin()
    {
        $user = factory(App\User::class)->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                ->assertSee('Login');

            // make sure request is not submitted if fields are empty
            $browser->click('button')
                ->assertPathIs('/login');

            // make sure user validation works
            $browser->type('username', $user->username);
            $browser->type('password', 'wrong password');
            $browser->click('button')
                ->assertSee('These credentials do not match our records.');

            $browser->clear('username');
            $browser->type('username', $user->username);
            $browser->type('password', 'secret');
            $browser->click('button')
                ->assertPathIs('/');
        });
    }

    protected function tearDown()
    {
        App\User::truncate();
    }


}
