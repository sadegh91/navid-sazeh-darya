<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestWarehouse extends Model
{
    use HasFactory;
    protected $table ='request_warehouses';
    protected $fillable = [
        'requester_id',
        'accepter_id',
        'deliverer_id',
        'receiver_id',
        'is_requester_accept',
        'is_accepter_accept',
        'is_deliverer_accept',
        'is_receiver_accept',
        'rejecter_id',
        'reject_description',
        'status',
    ];


}
