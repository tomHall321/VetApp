<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Cracker; 


class CrackerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function setUp() : void
    {
        $this->cracker = new Cracker();
    }

    public function testA()
    {
        $this->assertSame("a", $this->cracker->decrypt("!"));
    }

    public function testAB()
    {
        $this->assertSame("ba", $this->cracker->decrypt(")!"));
    }

    public function testFull()
    {
     
        $this->assertSame("hello mum", $this->cracker->decrypt("&.aad bjb"));
    }


}
