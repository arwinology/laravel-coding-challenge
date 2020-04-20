<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'location',
        'description',
        'image'
    ];

    public function departments() {
        return $this->hasMany('App\Models\Department');
    }
}