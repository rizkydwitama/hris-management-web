<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    protected $fillable = [
        'user_id', 'login_time',
    ];

    // Relasi One-to-Many (Inverse) dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
