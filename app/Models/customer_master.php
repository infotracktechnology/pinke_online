<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_master extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer_masters';
    protected $primaryKey = 'id';

    protected $fillable = [
            'name',
            'mail',
            'phone',
            'adderss1',
            'adderss2',
            'city',
            'zipcode',
            'remark'];
}
