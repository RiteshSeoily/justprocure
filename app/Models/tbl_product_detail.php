<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_product_detail extends Model
{
    use HasFactory;
    protected $table = 'tbl_product_details';

    public function product()
    {
        return $this->belongsTo(tbl_Product::class, 'tbl_product_id');
    }
}
