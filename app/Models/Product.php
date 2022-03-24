<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'productes';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'category', 'price', 'quantity', 'image', 'status'];
}
