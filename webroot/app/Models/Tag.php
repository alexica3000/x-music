<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

/**
 * Class Tag
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property Collection|TagsType[] $tagsType
 * @property bool $is_live
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'is_live', 'tags_type_id'];
    protected $perPage = 20;

    protected $cast = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function tagsType(): BelongsTo
    {
        return $this->belongsTo(TagsType::class, 'tags_type_id');
    }
}
