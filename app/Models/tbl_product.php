<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model
{
    use HasFactory;

    protected $table = 'tbl_products'; // Specify the table name explicitly if different from the model name convention

    protected $fillable = [
        'buyer_id',
        'cat_id',
        'sub_cat_id',
        'brand_id',
        'product_name',
        'material_code',
        'hsn',
        'gst',
        'measurement_unit',
        'tbl_product_slug',
        'tbl_short_description',
        'tbl_full_description',
        'tbl_image',
        'top_deal',
        'status',
        'is_approved',
        'merge_id',
        'meta_title',
        'meta_keyword',
        'meta_description',
        // 'created_at' and 'updated_at' are automatically managed by Eloquent
    ];

    // Define relationships if applicable

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }
    public function sellerRfq()
    {
        return $this->hasMany(SellerRfq::class, 'product_id');
    }

    // Define other relationships as needed
}
