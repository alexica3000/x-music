<?php

namespace Database\Seeders\Live;

use App\Interfaces\HasRolesInterface;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class AdminSeeder
 * @package Database\Seeders\Live
 */
class AdminSeeder extends Seeder
{
    const ADMIN_EMAIL = 'admin@admin.com';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::query()->where('email', self::ADMIN_EMAIL)->first();

        if (!$admin) {
            User::factory(['name' => 'Admin', 'email' => self::ADMIN_EMAIL, 'role_id' => HasRolesInterface::ROLE_ADMIN])->create();
        }
    }
}
