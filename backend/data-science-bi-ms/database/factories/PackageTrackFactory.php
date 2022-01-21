<?php

namespace Database\Factories;

use App\Domains\Packages\Models\Package;
use App\Domains\Packages\Models\PackageTrack;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageTrackFactory extends Factory
{
    protected $model = PackageTrack::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => 'Pacote encaminhado para ' . $this->faker->city . '.',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forPackage(Package $package)
    {
        return $this->state(function (array $attributes) use ($package) {
            return [
                'package_id' => $package->id,
            ];
        });
    }
}
