<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    protected $model = Account::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'document' => rand(11111111,99999999),
            'password' => Hash::make('password'),
            'isConsumer' => $this->faker->boolean
        ];
    }
}
