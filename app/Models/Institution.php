<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users(){
        return $this->hasMany('App\Models\User');
    }

    public function Students(){
        return $this->hasMany('App\Models\Student');
    }
}
