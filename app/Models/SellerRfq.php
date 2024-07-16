<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerRfq extends Model
{
    use HasFactory;

    protected $table = 'seller_rfqs';

    protected $fillable = [
        'seller_id',
        'rfq_id',
        'product_id',
    ];

    /**
     * Get the RFQ associated with the SellerRfq
     */
    public function rfq()
    {
        return $this->belongsTo(ListRfq::class, 'rfq_id');
    }
    public function product()
    {
        return $this->belongsTo(TblProduct::class, 'product_id');
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }
}
