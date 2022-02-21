<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kinetotherapeut extends Model
{
    use HasFactory;

    protected $table = 'kinetotherapists';
    protected $fillable = [
        'name',
        'surname',
        'phone_nr',
        'abbreviation',
    ];


    public function  address(){

        return $this->hasOne(Address::class,'kinetotherapist_id');
    }

    public function appointments(){
        return $this->hasMany(Appointment::class,'kinetotherapist_id');
    }

    public function workingDays(): \Illuminate\Database\Eloquent\Relations\BelongsToMany{
        return $this->belongsToMany(WorkingDay::class,
            "schedule" ,'kinetotherapist_id', 'working_day_id');
    }
}
