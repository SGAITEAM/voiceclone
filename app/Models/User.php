<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Passport\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    // use HasApiTokens;

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at', 'lang', 'source_lang', 'target_lang',
    ];

    /**
     * Hidden attributes for arrays.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute casting.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
        'is_paid' => 'boolean',
        'must_verify' => 'boolean',
        'is_open' => 'boolean',
        'is_order' => 'boolean',
        'is_franchise' => 'boolean',
        'real_paid' => 'boolean',
    ];
}
