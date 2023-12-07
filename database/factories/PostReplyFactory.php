<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostReply>
 */
class PostReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body' => collect($this->faker->paragraphs(mt_rand(1,3)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => mt_rand(1,5),
            'post_id' => mt_rand(1,30)
        ];
    }
}
