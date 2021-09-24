<?php

namespace App\Models;

use App\Interfaces\HasRolesInterface;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @package App\Models
 * @property int $role_id
 * @property string $name
 * @property string $email
 * @property string $logo
 * @property string $role
 * @property Carbon $created_at
 * @property bool $is_active
 */
class User extends Authenticatable implements HasRolesInterface
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $perPage = 20;

    const DEFAULT_ICON = '/images/default_user.png';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->role_id == self::ROLE_ADMIN;
    }

    /**
     * @return string
     */
    public function getRoleAttribute(): string
    {
        return self::ROLES[$this->role_id] ?? 'User';
    }

    public function getLogourlAttribute()
    {
        return empty($this->icon_url) ? asset(self::DEFAULT_ICON) : $this->icon_url;
    }
}
