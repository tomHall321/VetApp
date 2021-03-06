<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Owner::class, 50)->create();

        Owner::factory()
        //looks for factory associated with Owner model
        ->times(100)
        ->create();
    }
}