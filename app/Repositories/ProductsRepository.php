<?php

namespace App\Repositories;

use App\Models\Products;
use App\Repositories\BaseRepository;

/**
 * Class ProductsRepository
 * @package App\Repositories
 * @version September 29, 2021, 9:35 am UTC
*/

class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Product_name',
        'Brand_name',
        'Price_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Products::class;
    }
}
