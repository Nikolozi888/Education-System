<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capability extends Model
{
    protected $guarded = [];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_capability')->withTimestamps();
    }
}
