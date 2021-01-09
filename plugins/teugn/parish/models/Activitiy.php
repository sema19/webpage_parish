<?php namespace Teugn\Parish\Models;

use Model;

/**
 * Model
 */
class Activitiy extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teugn_parish_activities';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
