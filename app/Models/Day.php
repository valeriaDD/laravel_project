<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $guarded = ['*'];

    public function workingDay(){

        return $this->hasMany(WorkingDay::class, 'id', 'day_id');
    }
}
