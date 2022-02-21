<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'appointments';
    protected $fillable = [
        'client_id',
        'kinetotherapist_id',
        'service_id',
        'date',
        'start_time',
    ];

    public function kinetotherapeut(){
        return $this->belongsTo(Kinetotherapeut::class, 'kinetotherapist_id', 'id');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'id', 'client_id');
    }

    public function service(){
        return $this->belongsTo(Service::class, 'id', 'service_id');
    }
}
