<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses'; 

    protected $fillable = [
        'buyer_id',
        'contact_name',
        'gst_number',
        'pan_number',
        'company_name',
        'location',
        'contact_number',
        'state',
        'city',
        'landmark',
        'pincode',
        'address_type',
        'is_same',
        'primary_status',
    ];

    // Define relationships if needed
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
}
