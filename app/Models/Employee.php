<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'department_id',
        'first_name',
        'last_name',
        'position',
        'hire_date'
    ];

    public function department() {
        return $this->belongsTo('App\Models\Department');
    }
}