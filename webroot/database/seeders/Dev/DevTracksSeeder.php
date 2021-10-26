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
         Track::factory(10000)->create();
    }
}
