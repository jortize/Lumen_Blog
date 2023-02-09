<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{


    public function definition(): array
    {
    	return [
    	    'url' => 'posts/' . $this->faker->image('storage/app/public/posts',640,480,null,false)
    	];
    }
}
