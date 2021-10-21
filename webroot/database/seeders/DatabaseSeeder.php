<?php

namespace Database\Seeders;

use Database\Seeders\Live\AdminSeeder;
use Database\Seeders\Live\TagsSeeder;
use Database\Seeders\Live\TagsTypeSeeder;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 * @package Database\Seeders
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            TagsTypeSeeder::class,
            TagsSeeder::class,
        ]);
    }
}
