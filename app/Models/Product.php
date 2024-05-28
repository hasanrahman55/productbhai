<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'title',
        'details',
        'status',
        'stock',
        'image',
    ];
    
    use HasFactory;
}
