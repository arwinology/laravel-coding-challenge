<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'company_id',
        'type',
        'description',
        'image'
    ];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}