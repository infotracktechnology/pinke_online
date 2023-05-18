<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
            'itemcode',
            'itemdesc',
            'brand',
            'sections',
            'sizes',
            'slno',
            'rate',
            'MRP',
            'tax',
            'taxtype',
            'design',
            'style',
            'supplier',
            'Category',
            'colour',
            'stock',
            'adddate',
            'HSN',
            'front_image',
            'add_image',
];

}
