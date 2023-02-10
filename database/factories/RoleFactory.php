<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{

    public function definition(): array
    {
    	return [
    	    'name' => $this->faker->unique()->word(10),
            'description' => $this->faker->text(100)
    	];
    }
}
