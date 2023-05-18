<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_master extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_masters';
    protected $primaryKey = 'id';

    protected $fillable = [
            'order_id',
            'product_id',
            'c_id',
            'amount',
            'qty'];
}
