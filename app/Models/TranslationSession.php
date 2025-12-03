<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TranslationSession extends Model
{
    protected $fillable = ['user_id', 'session_id'];

    public static function createForUser($user_id)
    {
        return self::create([
            'user_id' => $user_id,
            'session_id' => Str::uuid()->toString()
        ]);
    }
}