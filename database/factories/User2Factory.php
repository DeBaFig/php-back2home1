<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User2;

class User2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
            'employee_id' => $this->faker->numberBetween(-10000, 10000),
            'email' => $this->faker->safeEmail,
            'ddd_phone' => $this->faker->numberBetween(-10000, 10000),
            'phone' => $this->faker->phoneNumber,
            'email_verified_at' => $this->faker->dateTime(),
            'create_at' => $this->faker->dateTime(),
        ];
    }
}
