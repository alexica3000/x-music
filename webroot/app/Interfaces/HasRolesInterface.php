<?php

namespace App\Interfaces;

interface HasRolesInterface
{
    public const ROLE_ADMIN = 1;
    public const ROLE_USER  = 2;

    public const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_USER  => 'User',
    ];

    public function isAdmin(): bool;
    public function getRoleAttribute(): string;
}
