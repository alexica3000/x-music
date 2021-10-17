<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\TagsType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * Class TagFactory
 * @package Database\Factories
 */
class TagFactory extends Factory
{
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->company;

        return [
            'name'         => $name,
            'slug'         => Str::slug($name),
            'tags_type_id' => Arr::random(TagsType::query()->pluck('id')->toArray()),
            'is_live'      => 1,
        ];
    }
}
