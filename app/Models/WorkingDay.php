<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_id',
        'start_time',
        'end_time'
    ];

    public function Day(){
        return $this->hasMany(Day::class);
    }
}
