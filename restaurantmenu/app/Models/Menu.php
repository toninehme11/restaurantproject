<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu'; // Set the table name if it's different
    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'image',
    ];
}
