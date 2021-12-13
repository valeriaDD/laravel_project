<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = [
        'client_id',
        'kinetotherapist_id',
        'service_id',
        'data',
        'start_time',
    ];

    public function Kinetotherapeut(){
        return $this->belongsTo(Kinetotherapeut::class);
    }

    public function Client(){
        return $this->belongsTo(Client::class);
    }

    public function Service(){
        return $this->belongsTo(Service::class);
    }
}
