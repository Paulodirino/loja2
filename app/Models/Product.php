<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
    protected $table='product';
    use HasFactory;

=======
    use HasFactory;
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    protected $fillable =[
        'name',
        'description',
        'price',
<<<<<<< HEAD
        'stock',
    ];
}
=======
        'stock'
    ];
    }
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
