<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App\Models
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_live', 'tags_type_id'];

    public function tagsType()
    {
        return $this->belongsTo(TagsType::class, 'tags_type_id');
    }
}
