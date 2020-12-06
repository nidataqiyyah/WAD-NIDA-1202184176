<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = 'products';
    protected $table = ['name', 'price', 'description', 'stock', 'img_path'];
}
