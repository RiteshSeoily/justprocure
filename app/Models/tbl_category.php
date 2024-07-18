<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_slug',
        'tbl_image',
        'user_id',
        'status',
        'is_approved',
    ];

    
}
