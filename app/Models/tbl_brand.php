<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_id',
        'buyer_id',
        'sub_cat_id',
        'brand_name',
        'is_top',
        'tbl_image',
        'status',
        'is_approved'
    ];
}
