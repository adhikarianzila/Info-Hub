<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialCategory extends Model
{
    use HasFactory;
    protected $table = 'testimonial_category';
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'navbar_status',
        'status',
        'created_by'
    ];
}
