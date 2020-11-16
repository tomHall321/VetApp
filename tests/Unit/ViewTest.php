<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Owner;

class ViewTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testHomeView()
    {
        $this->get('/')->assertViewIs('home');

    }
    public function testOwnerView()
    {
        $this->get('owners')->assertViewIs('.owners');
    }
}
