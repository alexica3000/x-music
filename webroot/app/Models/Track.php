<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Track
 * @package App\Models
 * @property string|null $name
 * @property string|null $mp3_url
 * @property string|null $agreement_url
 * @property string|null $length
 * @property bool $is_live
 * @property string|null $notes
 * @property int|null $bpm
 */
class Track extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mp3_url', 'agreement_url', 'length', 'is_live', 'notes', 'bpm'];

    protected $cast = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function key(): BelongsTo
    {
        return $this->belongsTo(Key::class, 'key_id');
    }
}
