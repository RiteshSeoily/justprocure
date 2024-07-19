<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_sub_category extends Model
{
    use HasFactory;

    // The name of the table associated with the model.
    protected $table = 'tbl_sub_categories';

    // The attributes that are mass assignable.
    protected $fillable = [
        'cat_id',
        'buyer_id',
        'sub_category_name',
        'sub_cat_slug',
        'tbl_image',
        'status',
        'is_approved',
    ];

    protected $hidden = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => 'integer',
        'is_approved' => 'integer',
    ];

    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(tbl_category::class, 'cat_id');
    }
}
