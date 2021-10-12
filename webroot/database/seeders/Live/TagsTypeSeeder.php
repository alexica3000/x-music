<?php

namespace Database\Seeders\Live;

use App\Models\TagsType;
use Illuminate\Database\Seeder;

/**
 * Class TagsTypeSeeder
 * @package Database\Seeders\Admin
 */
class TagsTypeSeeder extends Seeder
{
    const TAGS = [
        ["name"=>"Mood", "sort"=>100, "score"=> 20],
        ["name"=>"Energy", "sort"=>80, "score"=> 20],
        ["name"=>"Genre", "sort"=>90, "score"=> 20],
        ["name"=>"Instrument", "sort"=>60, "score"=> 5],
        ["name"=>"Keyword", "sort"=>70, "score"=> 5],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::TAGS as $value) {
            TagsType::query()->create($value);
        }
    }
}
