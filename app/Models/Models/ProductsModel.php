<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'goods';

    protected $fillable = [
        'id',
        'name',
        'price',
        'image',
        'category_id',
    ];
}
