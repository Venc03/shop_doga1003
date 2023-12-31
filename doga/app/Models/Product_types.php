<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_types extends Model
{
    use HasFactory;

    protected  $primaryKey = 'type_id';

    protected $product_type = [
        'name',
        'description',
        'cost'
    ];

}
