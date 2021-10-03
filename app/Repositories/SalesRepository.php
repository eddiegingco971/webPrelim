<?php

namespace App\Repositories;

use App\Models\Sales;
use App\Repositories\BaseRepository;

/**
 * Class SalesRepository
 * @package App\Repositories
 * @version September 29, 2021, 9:57 am UTC
*/

class SalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Wholesale_qty',
        'Description',
        'Product_id',
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
        return Sales::class;
    }
}
