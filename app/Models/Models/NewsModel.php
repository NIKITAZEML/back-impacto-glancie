<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table = "news";

    protected $fillable = [
        'id',
        'name',
        'create_date',
        'image',
        'content',
    ];

}
