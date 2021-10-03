<?php

namespace App\Repositories;

use App\Models\Pricing;
use App\Repositories\BaseRepository;

/**
 * Class PricingRepository
 * @package App\Repositories
 * @version September 29, 2021, 9:37 am UTC
*/

class PricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Price'
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
        return Pricing::class;
    }
}
