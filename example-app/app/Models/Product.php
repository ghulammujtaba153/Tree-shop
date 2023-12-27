<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Set the table name if different from the default

    // Define fillable fields if using mass assignment
    protected $fillable = ['title', 'description', 'price', 'image'];

    // Define any relationships or additional configurations as needed
}
