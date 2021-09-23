<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /** @test */

    public function user_has_age_attribute()
    {
        // given a user

        $user = User::factory(User::class)->make();

        // age attribute is not null

        $this->assertNotNull($user->age);
    }
}
