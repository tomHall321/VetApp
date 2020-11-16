<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Owner;

class HomePageRoutingTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test200Response()
    {
        Owner::create([
            'first_name'=>'Bill',
            'last_name'=>'Gates',
            'telephone'=>'07654666789',
            'email'=>'windows@windows.com',
            'address_1'=>'123',
            'address_2'=>'Windows Lane',
            'town'=>'San Francisco',
            'postcode'=>'SL1 W1N',
            ]);

        $this->get('/')->assertStatus(200);
        $this->get('/owners')->assertStatus(200);
        $this->get('/owners/1')->assertStatus(200);
    }
    
    public function test404Response()
    {
        $this->get('/definitelyNotValid')->assertStatus(404);
        $this->get('/owners/2')->assertStatus(404);
    }


}