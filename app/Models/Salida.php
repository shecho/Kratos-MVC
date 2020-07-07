<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Salida
 * @package App\Models
 * @version July 7, 2020, 3:41 am UTC
 *
 * @property string $name
 * @property string $document
 * @property string $temperature
 * @property string $visitDate
 * @property string $visitTime
 */
class Salida extends Model
{
    use SoftDeletes;

    public $table = 'salidas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'document',
        'temperature',
        'visitDate',
        'visitTime'
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
        'visitTime' => 'string'
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
