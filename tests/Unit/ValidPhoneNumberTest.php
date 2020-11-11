<?php

namespace Tests\Unit;

use App\Models\Owner;
use PHPUnit\Framework\TestCase;

class ValidPhoneNumberTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testValidPhoneNumber()
    {
         $this->assertFalse(Owner::validPhoneNumber('sdasdjaodiaj'));
         $this->assertTrue(Owner::validPhoneNumber('07835467859'));
         $this->assertFalse(Owner::validPhoneNumber('12345'));
    }
}
