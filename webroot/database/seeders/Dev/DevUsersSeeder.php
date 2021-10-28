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
        $users = User::factory(10000)->make();
        $chunks = $users->chunk(1000);

        $chunks->each(function ($chunk) {
            User::query()->insert($chunk->toArray());
        });
    }
}
