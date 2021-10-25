<?php

namespace Database\Seeders\Live;

use App\Models\Key;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class KeysSeeder
 * @package Database\Seeders\Live
 */
class KeysSeeder extends Seeder
{
    const KEYS = ['Atonal', 'A major', 'A minor', 'A♭ major', 'A♭ minor', 'A♯ minor', 'B major', 'B minor', 'B♭ major', 'B♭ minor', 'C major',
                  'C minor', 'C♭ major', 'C♯ major', 'C♯ minor', 'D major', 'D minor', 'D♭ major', 'D♯ minor', 'E major', 'E minor', 'E♭ major',
                  'E♭ minor', 'F major', 'F minor', 'F♯ major', 'F♯ minor', 'G major', 'G minor', 'G♭ major', 'G♯ minor'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (self::KEYS as $keyName) {
            Key::query()->create([
                'name' => $keyName,
            ]);
        }
    }
}
