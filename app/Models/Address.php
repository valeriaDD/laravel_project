<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $primaryKey = 'kinetotherapist_id';
    public $incrementing = false;

    protected $fillable = [
        'kinetotherapist_id',
        'city',
        'street',
        'street_nr',
    ];

    public function kinetotherapeut()
    {
        return $this->belongsTo(Kinetotherapeut::class);
    }
}
