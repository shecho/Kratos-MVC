<?php

namespace App\Repositories;

use App\Models\Salida;
use App\Repositories\BaseRepository;

/**
 * Class SalidaRepository
 * @package App\Repositories
 * @version July 7, 2020, 3:41 am UTC
*/

class SalidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'document',
        'temperature',
        'visitDate',
        'visitTime'
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
        return Salida::class;
    }
}
