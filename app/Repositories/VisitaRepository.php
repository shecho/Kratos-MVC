<?php

namespace App\Repositories;

use App\Models\Visita;
use App\Repositories\BaseRepository;

/**
 * Class VisitaRepository
 * @package App\Repositories
 * @version July 7, 2020, 3:29 am UTC
*/

class VisitaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'document',
        'temperature',
        'visitDate',
        'visit-time'
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
        return Visita::class;
    }
}
