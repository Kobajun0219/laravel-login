<?php

namespace Database\Factories;

use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(rand(10,15)),
            'content' => $this->faker->realText(rand(20, 50)),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
