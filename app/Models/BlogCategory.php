<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'seo_name',
        'seo_description',
    ];

    public function articles(){
        return $this->belongsToMany(BlogTag::class);
    }
}
