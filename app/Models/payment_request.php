<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_request extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment_requests';
    protected $primaryKey = 'id';

    protected $fillable = [
            'receipt',
            'order_id',
            'c_id',
            'amount',
            'gatewayname',
            'adate',
            'atime'];
}
