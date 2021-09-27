<?php

namespace Database\Seeders\Dev;

use App\Interfaces\HasRolesInterface;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class DevUsersSeeder
 * @package Database\Seeders\Dev
 */
class DevUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::factory(1000)->create();
    }
}
