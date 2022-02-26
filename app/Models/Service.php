<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model implements LoggableInterface
{
    use HasFactory;

    protected $table = 'services';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'duration',
        'price',
        'abbreviation',
        'appointments_nr',
    ];

    public function appointments(){

        return $this->hasMany(Appointment::class, 'service_id');
    }


    public function convertToLoggableString():string{

        return "Service with id: $this->id";

    }

    public function getData():array{
        return[
            'id' => $this->id,
            'abbreviation' => $this->abbreviation,
            'name' => $this->name,
            'price' => $this->price
        ];
    }

}
