<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Model::class;

    public function definition(): array
    {
    	return [
    	    'url' => 'posts/' . $this->faker->image('public/storage/posts',640,480,null,false)
    	];
    }
}
