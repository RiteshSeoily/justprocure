<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblProduct extends Model
{
    use HasFactory;

    protected $table = 'tbl_products';

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
    ];

    /**
     * Get the buyer that owns the product.
     */
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }
    
    /**
     * Get the RFQs associated with the product.
     */
    public function sellerRfq()
    {
        return $this->hasMany(SellerRfq::class, 'product_id');
    }
}
