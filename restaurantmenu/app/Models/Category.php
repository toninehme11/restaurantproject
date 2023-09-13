<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Set the table name if it's different

    protected $fillable = ['categories']; // Define the fillable fields

    // You can define relationships here if necessary
}