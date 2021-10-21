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
         Tag::factory(1000)->create();
    }
}
