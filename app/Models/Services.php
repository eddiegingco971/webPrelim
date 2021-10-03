<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Services
 * @package App\Models
 * @version September 29, 2021, 9:36 am UTC
 *
 * @property \App\Models\Product $product
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property string $Payment_Title
 * @property string $Description
 * @property integer $Product_id
 */
class Services extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Payment_Title',
        'Description',
        'Product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Payment_Title' => 'string',
        'Description' => 'string',
        'Product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Payment_Title' => 'required|string|max:200',
        'Description' => 'required|string|max:200',
        'Product_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'Product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'Service_id');
    }
}
