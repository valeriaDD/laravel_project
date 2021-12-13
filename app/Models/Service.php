<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        'name',
        'duration',
        'price',
        'abbreviation',
    ];

    public function Appointment(){
        return $this->hasMany(Appointment::class, 'foreign_key', 'service_id');
    }
}
