<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'image',
    ];

    // Relasi ke Category
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
