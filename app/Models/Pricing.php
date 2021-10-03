<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version September 29, 2021, 9:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property number $Price
 */
class Pricing extends Model
{
  //  use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'Price_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'Price_id');
    }
}
