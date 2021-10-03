<?php

namespace App\Repositories;

use App\Models\Services;
use App\Repositories\BaseRepository;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version September 29, 2021, 9:36 am UTC
*/

class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Payment_Title',
        'Description',
        'Product_id'
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
        return Services::class;
    }
}
