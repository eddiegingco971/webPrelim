<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version September 29, 2021, 9:57 am UTC
 *
 * @property \App\Models\Pricing $price
 * @property \App\Models\Product $product
 * @property integer $Wholesale_qty
 * @property string $Description
 * @property integer $Product_id
 * @property integer $Price_id
 */
class Sales extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Wholesale_qty',
        'Description',
        'Product_id',
        'Price_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Wholesale_qty' => 'integer',
        'Description' => 'string',
        'Product_id' => 'integer',
        'Price_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Wholesale_qty' => 'required|integer',
        'Description' => 'required|string|max:100',
        'Product_id' => 'required',
        'Price_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function price()
    {
        return $this->belongsTo(\App\Models\Pricing::class, 'Price_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'Product_id');
    }
}
