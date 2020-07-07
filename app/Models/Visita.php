<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Visita
 * @package App\Models
 * @version July 7, 2020, 3:29 am UTC
 *
 * @property string $name
 * @property string $document
 * @property string $temperature
 * @property string $visitDate
 * @property string $visit-time
 */
class Visita extends Model
{
    use SoftDeletes;

    public $table = 'visitas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'document',
        'temperature',
        'visitDate',
        'visit-time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'document' => 'string',
        'temperature' => 'string',
        'visitDate' => 'date',
        'visit-time' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'document' => 'required',
        'temperature' => 'required',
        'visitDate' => 'required'
    ];

    
}
