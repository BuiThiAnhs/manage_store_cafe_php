<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentProduct extends Model
{
    protected $fillable = [
        'product_id',
        'ingredient_id',
        'amount'
        // Add other fillable fields as needed
    ];
    use HasFactory;
}
