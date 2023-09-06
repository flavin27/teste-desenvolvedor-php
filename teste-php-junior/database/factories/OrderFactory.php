<?php

namespace Database\Factories;

use App\Models\Consumer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderFactory extends Factory
{
    protected $model = Order::class;
    public function definition(): array
    {
        $consumer = Consumer::factory()->create();
        $consumerId = $consumer->user_id;

        return [
            'consumer_id' => $consumerId,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'status'=> $this->faker->randomElement(['open', 'paid', 'canceled'])
        ];
    }
}
