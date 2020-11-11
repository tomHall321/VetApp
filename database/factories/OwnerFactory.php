<?php

namespace Database\Factories;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Owner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>'Bill',
            'last_name'=>'Gates',
            'telephone'=>'07654666789',
            'email'=>'windows@windows.com',
            'address_1'=>'123',
            'address_2'=>'Windows Lane',
            'town'=>'San Francisco',
            'postcode'=>'SL1 W1N',
        ];
    }
}