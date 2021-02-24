<?php namespace Teugn\Parish\Models;

use Model;

/**
 * Model
 */
class LiturgicalDay extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'teugn_parish_liturgical_calendar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
