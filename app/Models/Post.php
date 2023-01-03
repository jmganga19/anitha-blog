<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'posts';
    protected $fillable=[
            'title',
            'slug',
            'description',
            'image',
            'meta-title',
            'meta-description',
            'meta-keyword',
            'status',
            'created_by',
    ];
}
