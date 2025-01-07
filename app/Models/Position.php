<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'name',
    ];

    // Relasi Many-to-Many dengan Employee
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_position');
    }
}
