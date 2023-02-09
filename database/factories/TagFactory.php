<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    protected $model = Model::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->word(20);
    	return [
    	    'name' => $name,
            'slug' => Str::slug($name)
    	];
    }
}
