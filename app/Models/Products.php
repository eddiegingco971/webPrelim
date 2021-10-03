<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Products
 * @package App\Models
 * @version September 29, 2021, 9:35 am UTC
 *
 * @property \App\Models\Pricing $price
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property \Illuminate\Database\Eloquent\Collection $services
 * @property string $Product_name
 * @property string $Brand_name
 * @property integer $Price_id
 */
class Products extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_name',
        'Brand_name',
        'Price_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_name' => 'string',
        'Brand_name' => 'string',
        'Price_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_name' => 'required|string|max:100',
        'Brand_name' => 'required|string|max:100',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'Product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'Product_id');
    }
}
