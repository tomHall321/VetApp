<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Owner;

class DatabaseTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDatabase()
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
        $ownerFromDB = Owner::first();

        $this->assertSame("Bill", $ownerFromDB->first_name);
    }
}
