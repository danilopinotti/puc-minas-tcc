<?php

namespace Database\Factories;

use App\Domains\Supplier\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cnpj' => $this->faker->bothify('##.###.###/0001-0#'),
            'company_name' => $this->faker->company,
            'trading_name' => $this->faker->company,
            'contact_email' => $this->faker->companyEmail,
            'contact_phone' => $this->faker->bothify('(##) #####-####'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
