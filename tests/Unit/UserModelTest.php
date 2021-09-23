<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserModelTest extends TestCase
{
    // use DatabaseTransactions;
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function user_has_full_name_attribute()
    {

        // create user

        $user = User::create([
            'firstname' => 'Joseph',
            'lastname' => 'Iyq',
            'email' => 'josefiyq@gmail.com',
            'password' => 'secret'
        ]);


        // assert user has full name

        $this->assertEquals('Joseph Iyq', $user->fullname);


    }
}
