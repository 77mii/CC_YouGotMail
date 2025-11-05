<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash; // <-- 1. Import Hash
use Illuminate\Database\Eloquent\Casts\Attribute; // <-- 2. Import Attribute

class Subscriber extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password', // <-- 3. Add password
        'birthday', // <-- 4. Add birthday
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', // <-- 5. Hide password from JSON responses
    ];

    /**
     * Interact with the user's password.
     *
     * Automatically hashes the password when it is set.
     */
    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Hash::make($value),
        );
    }
}
