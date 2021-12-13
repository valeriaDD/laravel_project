<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'author_id',
        'image',
        'published_at',
        'except',
        'category_id',
        'seo_title',
        'seo_description',
    ];

    public function tags(){
        return $this->belongsToMany(BlogTag::class);
    }
}
