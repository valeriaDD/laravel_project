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

    public function day(){

        return $this->BelongsTo(Day::class, 'day_id');
    }


    public function kinetotherapeuts(){

        return $this->belongsToMany(Kinetotherapeut::class, 'kinetotherapeut_workingday');
    }
}
