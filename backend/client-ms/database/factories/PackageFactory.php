<?php

namespace Database\Factories;

use App\Domains\Packages\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => mb_strtoupper($this->faker->bothify('??#??#-??')),
            'description' => $this->faker->text(50),
            'origin' => $this->faker->address,
            'destination' => $this->faker->address,
            'height' => $this->faker->numberBetween(1, 100),
            'width' => $this->faker->numberBetween(1, 100),
            'length' => $this->faker->numberBetween(1, 100),
            'weight' => $this->faker->numberBetween(1, 100),
            'is_delivered' => $this->faker->boolean,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withCode(string $code)
    {
        return $this->state(function (array $attributes) use ($code) {
            return [
                'code' => $code,
            ];
        });
    }
}
