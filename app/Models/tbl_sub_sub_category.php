<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_sub_sub_category extends Model
{
    use HasFactory;

    // The name of the table associated with the model.
    protected $table = 'tbl_sub_sub_categories';

    // The attributes that are mass assignable.
    protected $fillable = [
        'cat_id',
        'sub_cat_id',
        'user_id',
        'category_name',
        'category_slug',
        'tbl_image',
        'status',
        'is_approved',
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [];

    // The attributes that should be cast to native types.
    protected $casts = [
        'status' => 'integer',
        'is_approved' => 'integer',
    ];

    // Disable timestamps if not using them.
    public $timestamps = true;
}
