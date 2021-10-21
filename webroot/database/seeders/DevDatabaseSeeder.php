<?php

namespace Database\Seeders;

use Database\Seeders\Dev\DevTagsSeeder;
use Database\Seeders\Dev\DevUsersSeeder;
use Illuminate\Database\Seeder;

/**
 * Class DevDatabaseSeeder
 * @package Database\Seeders
 */
class DevDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DevUsersSeeder::class,
            DevTagsSeeder::class,
        ]);
    }
}
