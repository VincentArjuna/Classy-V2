<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Outlet>
 */
class OutletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake()->unique()->ean8(),
            'name' => fake()->city(),
            'address' => fake()->address(),
            'telp_1' => fake()->phoneNumber(),
            'telp_2' => fake()->phoneNumber(),
            'fax' => fake()->phoneNumber(),
        ];
    }
}
