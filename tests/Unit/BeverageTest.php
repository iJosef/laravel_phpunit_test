<?php

namespace Tests\Unit;

use App\Exceptions\MinorCannotBuyAlcoholicBeverageException;
use App\Models\Beverage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;

    private $beverage;

    public function setup():void
    {
        parent::setup();

        $this->beverage = Beverage::factory(Beverage::class)->make();
    }
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function beverage_has_name()
    {
        // create beverage

        // $beverage = Beverage::factory(Beverage::class)->make();

        // get name



        // assert
        $this->assertNotEmpty($this->beverage->name);
    }

    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function beverage_has_type()
    {

        // assert
        $this->assertNotEmpty($this->beverage->type);
    }

    /** @test */

    public function a_minor_can_not_buy_alcoholic_beverage()
    {
        // alcoholic beverage

        $beverage = Beverage::factory(Beverage::class)->make([
            'type' => 'Alcoholic'
        ]);

        // minor user

        $user = User::factory(User::class)->make([
            'age' => '17'
        ]);

        // logged in

        $this->actingAs($user);

        // expect exception

        $this->expectException(MinorCannotBuyAlcoholicBeverageException::class);

        // buy beverage

        $beverage->buy();


    }


}
