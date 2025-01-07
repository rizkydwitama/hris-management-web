<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name',
    ];

    // Relasi One-to-Many dengan Employee
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
