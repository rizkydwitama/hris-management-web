<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'username', 'password', 'unit_id', 'join_date',
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi One-to-One dengan Unit
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    // Relasi Many-to-Many dengan Position
    public function positions()
    {
        return $this->belongsToMany(Position::class, 'employee_position');
    }
}
