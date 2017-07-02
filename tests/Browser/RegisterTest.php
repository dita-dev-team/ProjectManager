<?php

namespace Tests\Browser;

use App;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{

    public function testRegistration()
    {

        $user = factory(App\User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/register')
                ->assertSee('Register');

            // check for double registration
            $browser->type('username', $user->username);
            $browser->type('name', $user->name);
            $browser->type('email', $user->email);
            $browser->type('password', $user->password);
            $browser->type('password_confirmation', $user->password);
            $browser->click('button')
                ->assertPathIs('/register');


            // make sure request is not submitted if fields are empty
            $browser->click('button')
                ->assertPathIs('/register');
            $browser->type('username', 'test');
            $browser->type('name', 'test');
            $browser->type('email', 'test@gmail.com');
            $browser->type('password', 'test123');
            $browser->type('password_confirmation', 'test123');
            $browser->click('button')
                ->assertPathIs('/');

            $this->assertDatabaseHas('users', [
                'username' => $user->username,
                'name' => $user->name,
                'email' => $user->email,
            ]);

        });

    }

    protected function tearDown()
    {
        App\User::truncate();
    }

}
