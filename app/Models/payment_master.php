<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_master extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment_masters';
    protected $primaryKey = 'id';

    protected $fillable = [
            'Payment_Status',
            'order_id',
            'Payment_ID',
            'Paid_Amount',
            'c_id',
            'receipt',
            'name',
            'email',
            'phone',
            'PaymentGateWayName',
            'ResponseString',
            'adate',
            'atime'];
}
