<?php namespace Teugn\Parish\Models;

use Model;

/**
 * Model
 */
class Ministrant extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'teugn_parish_minis';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany =[
        'Activity' => [
            'teugn\parish\models\Activities',
            'table' => 'teugn_parish_minis_link',
            'otherKey' => 'activity_id',
            'key' => 'ministrant_id'
        ]
    ];
}
