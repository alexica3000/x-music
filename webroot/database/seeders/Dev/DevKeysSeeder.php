<?php

namespace Database\Seeders\Dev;

use App\Models\Key;
use Illuminate\Database\Seeder;

/**
 * Class DevKeysSeeder
 * @package Database\Seeders\Dev
 */
class DevKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Key::factory(100)->create();
    }
}
