<?php

namespace Database\Seeders\Dev;

use App\Models\Track;
use Illuminate\Database\Seeder;

/**
 * Class DevTracksSeeder
 * @package Database\Seeders\Dev
 */
class DevTracksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tracks = Track::factory(10000)->make();
        $chunks = $tracks->chunk(1000);

        $chunks->each(function ($chunk) {
            Track::query()->insert($chunk->toArray());
        });
    }
}
