<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Key
 * @package App\Models
 */
class Key extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
