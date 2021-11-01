<?php

namespace Database\Factories;

use App\Models\Key;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class TrackFactory
 * @package Database\Factories
 */
class TrackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $key = Key::query()->inRandomOrder()->first();

        return [
            'name'              => $this->faker->streetName(),
            'mp3_url'           => null,
            'agreement_url'     => null,
            'length'            => $this->faker->numberBetween(1, 500),
            'is_live'           => $this->faker->boolean,
            'notes'             => $this->faker->sentence(),
            'bpm'               => $this->faker->numberBetween(40, 250),
            'key_id'            => $key->id,
            'created_at'        => $this->faker->dateTime(),
            'updated_at'        => now(),
        ];
    }
}
