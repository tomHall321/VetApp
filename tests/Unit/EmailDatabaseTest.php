<?php

namespace Tests\Unit;

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Owner;

class EmailDatabaseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
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

        $this->assertSame("windows@windows.com", $ownerFromDB->email);
        $this->assertNotSame("deffoNot@windows.com", $ownerFromDB->email);
    }
}
