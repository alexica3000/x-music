<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class TagsType
 * @package App\Models
 */
class TagsType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sort', 'score'];

    /**
     * @return HasMany
     */
    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class, 'tags_type_id', 'id');
    }
}
