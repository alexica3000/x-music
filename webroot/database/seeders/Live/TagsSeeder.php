<?php

namespace Database\Seeders\Live;

use App\Models\Tag;
use App\Models\TagsType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

/**
 * Class TagSeeder
 * @package Database\Seeders
 */
class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Arr::only(TagsTypeSeeder::TAGS, ['name']) as $tag_type_name) {
            $tags_type = TagsType::query()->where('name', $tag_type_name)->first();

            if(!empty($tags_type) AND isset($this->getData()[$tag_type_name])) {
                foreach ($this->getData()[$tag_type_name] as $tags_name) {
                    $tag = new Tag([
                        'name' => $tags_name,
                        'live' => 1
                    ]);

                    $tags_type->tags()->save($tag);
                }
            }
        }
    }

    private function getData(): array
    {
        return [
            'Mood' => [
                'anthemic', 'bittersweet', 'bubbly', 'campy', 'carefree', 'celebratory', 'cheesy', 'childlike', 'chill', 'cool', 'cute', 'dark', 'dramatic', 'dreamy', 'elegant',
                'epic', 'exciting', 'fun', 'happy', 'heartwarming', 'innocent', 'inspirational', 'intense', 'introspective', 'jangly', 'lighthearted', 'magical', 'moody',
                'mysterious', 'neutral', 'nostalgic', 'oddball', 'party', 'patriotic', 'playful', 'powerful', 'quirky', 'sad', 'scary', 'sentimental', 'sexy', 'silly', 'sophisticated',
                'summery', 'suspenseful', 'sweet', 'techy', 'tense', 'triumphant', 'uplifting', 'warm', 'whimsical'
            ],
            'Genre' => [
                'acoustic', 'alternative', 'ambient', 'americana', 'bluegrass', 'blues', 'bossa nova', 'chamber pop', 'children', 'cinematic', 'classic rock', 'classical', 'comedy',
                'country', 'dance', 'electronic', 'experimental', 'fantasy', 'folk', 'funk', 'garage rock', 'hip hop', 'holiday', 'indie pop', 'indie rock', 'island', 'jazz', 'latin',
                'light contemporary', 'orchestral', 'pop', 'post rock', 'punk', 'r&b', 'rock', 'soul', 'surf', 'synthpop', 'western', 'world'
            ],
            'Energy' => [
                'aggressive', 'big finish', 'bouncy', 'building', 'calming', 'downtempo', 'driving', 'easygoing', 'energetic', 'fast', 'frenetic', 'laid back', 'relaxed', 'slow', 'uptempo'
            ],
            'Keyword' => [
                '4 on the floor', '60\'s', '70\'s', '80\'s', '90\'s', 'abstract', 'asian', 'atmospheric', 'attitude', 'ballad', 'bassy', 'beachy', 'big beat', 'breakbeat', 'climactic',
                'confident', 'cowboy', 'disco', 'distorted', 'drone', 'drum n bass', 'dubstep', 'edgy', 'edm', 'euro', 'film score', 'house', 'indian', 'journeying', 'lo fi',
                'lounge', 'lullaby', 'metal', 'minimal', 'percussive', 'psychedelic', 'quiet', 'retro', 'rough', 'simple', 'smooth', 'sparse', 'spy', 'swagger', 'top 40', 'trap', 'trashy', 'video game'
            ],
            'Instrument' => [
                '808', 'accordion', 'autoharp', 'banjo', 'bass:electric', 'bass:synth', 'bass:upright', 'bells', 'brass', 'cello', 'claps', 'clarinet', 'drum machine', 'drums', 'drums:brushes',
                'drums:conga', 'flute', 'gamelan', 'glockenspiel', 'guitar', 'guitar:acoustic', 'guitar:electric', 'guitar:nylon', 'guitar:slide', 'harmonica', 'harp', 'harpsichord', 'horns',
                'keyboards', 'mandolin', 'marimba', 'mellotron', 'no drums', 'organ', 'percussion', 'percussion only', 'piano', 'piano:electric', 'samples', 'saxophone', 'solo piano', 'strings',
                'strings:pizzicato', 'synthesizer', 'timpani', 'trombone', 'trumpet', 'turntables', 'ukulele', 'vibraphone', 'vocals', 'vocoder', 'whistling', 'woodwinds', 'xylophone'
            ]
        ];
    }
}
