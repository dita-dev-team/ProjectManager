<?php

namespace Tests\Unit;

use App;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test user creation and modification using eloquent
     *
     * @return void
     */
    public function testUserCreateAndUpdate()
    {
        $user = factory(App\User::class)->create();
        // check if user is created
        $this->assertDatabaseHas('users', [
            'username' => $user->username,
            'email' => $user->email,
            'name' => $user->name
        ]);

        $user->email = 'newemail@gmail.com';
        $user->name = 'new name';
        $user->save();
        // check if user is updated
        $this->assertDatabaseHas('users', [
            'email' => $user->email,
            'name' => $user->name
        ]);
    }

}
