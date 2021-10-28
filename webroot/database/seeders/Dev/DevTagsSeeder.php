<?php

namespace Database\Seeders\Dev;

use App\Models\Tag;
use Illuminate\Database\Seeder;

/**
 * Class DevTagsSeeder
 * @package Database\Seeders\Dev
 */
class DevTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::factory(1000)->make();
        $chunks = $tags->chunk(100);

        $chunks->each(function ($chunk) {
            Tag::query()->insert($chunk->toArray());
        });
    }
}
