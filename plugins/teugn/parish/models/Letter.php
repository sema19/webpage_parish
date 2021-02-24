<?php namespace Teugn\Parish\Models;

use Model;

/**
 * Model
 */
class Letter extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'teugn_parish_letter';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * Scope a query to only include active users.
     */
    public function scopeNextParishLetters($query)
    {
        return $query->whereDate('to_date','>=',date('Y-m-d'))->orderByRaw('from_date ASC');
    }
}
