<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_category extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'category_name',
        'category_slug',
        'tbl_image',
        'buyer_id',
        'status',
        'is_approved',
    ];

    public function subCategories()
    {
        return $this->hasMany(tbl_sub_category::class, 'cat_id');
    }
}
