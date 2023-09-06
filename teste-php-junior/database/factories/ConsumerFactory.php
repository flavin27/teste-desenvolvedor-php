<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Consumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consumer>
 */
class ConsumerFactory extends Factory
{
    protected $model = Consumer::class;
    public function definition(): array
    {
        return [
            'user_id' => Account::factory()->create(['isConsumer' => true])->id
        ];
    }
}
