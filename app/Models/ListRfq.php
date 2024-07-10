<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListRfq extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer_id',
        'rfq_number',
        'type_a',
        'type_b',
        'type_c',
        'type_a_ids',
        'type_b_ids',
        'type_c_ids',
        'is_deleted',
        'delete_count',
        'is_modified'
    ];
 
}
