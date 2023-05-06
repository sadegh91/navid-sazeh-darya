<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestWarehouseDetail extends Model
{
    use HasFactory;
    protected $table ='request_warehouse_details';
    protected $fillable = [
        'request_id',
        'code',
        'title',
        'unit_type',
        'quantity_request',
        'quantity_receive',
        'description',
    ];


}
