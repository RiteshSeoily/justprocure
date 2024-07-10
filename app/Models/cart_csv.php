<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartCsv extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'buyer_id',
        'rfq_id',
        'file',
        'date_of_delivery',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function rfq()
    {
        return $this->belongsTo(ListRfq::class);
    }
}
