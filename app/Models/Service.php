<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements OtherLoggableInterface
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        'name',
        'duration',
        'price',
        'abbreviation',
    ];

    public function appointments(){

        return $this->hasMany(Appointment::class, 'service_id');
    }

    public function getStringLocation():string{

        return "User accessed a service with id: $this->id"; 
    }

    public function getArrayData():array{
        return[
            'id' => $this->id,
            'abbreviation' => $this->abbreviation,
            'name' => $this->name
        ];
    }
}