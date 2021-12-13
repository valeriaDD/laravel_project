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


    public function  Address(){
        return $this->hasOne(Address::class,'foreign_key', 'kinetotherapist_id');
    }
    public function Appointment(){
        return $this->hasMany(Appointment::class,'foreign_key', 'kinetotherapist_id');
    }
    
}
