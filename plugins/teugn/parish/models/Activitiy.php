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

    /**
     * Scope a query to only include active users.
     */
    public function scopeNextMasses($query)
    {
        //return $query->orderByRaw('start_date ASC')->orderByRaw('start_time ASC')->where('start_date','>',getdate());
        return $query->whereDate('start_date','>=',date('Y-m-d'))->orderByRaw('start_date ASC')->orderByRaw('start_time ASC');
    }

    /**
     * Scope a query to only include active users.
     */
    public function scopeNextMassesTeugn($query)
    {
        //return $query->orderByRaw('start_date ASC')->orderByRaw('start_time ASC')->where('start_date','>',getdate());
        return $query->where('location','=','Teugn')->whereDate('start_date','>=',date('Y-m-d'))->orderByRaw('start_date ASC')->orderByRaw('start_time ASC');
    }

    /* Relations */

    public $hasOne =[
        'LiturgicalDay' => [
            'teugn\parish\models\LiturgicalDay',
            'table' => 'teugn_parish_liturgical_calendar',
            'key' => 'date',
            'otherKey' => 'start_date'

        ]
    ];

    public $belongsToMany =[

        'Lector' => [
            'teugn\parish\models\Lector',
            'table' => 'teugn_parish_activity_lector_link',
            'order' => 'location',
            'otherkey' => 'lector_id',
            'key' => 'activity_id'
        ],
        'Communionhelper' => [
            'teugn\parish\models\Communionhelpers',
            'table' => 'teugn_parish_communionhelpers_link',
            'order' => 'location',
            'otherKey' => 'communionhelpers_id',
            'key' => 'activity_id'
        ],
        'Altarserver' => [
            'teugn\parish\models\Altarserver',
            'table' => 'teugn_parish_altarservers_link',
            'otherKey' => 'altarservers_id',
            'key' => 'activity_id'
        ]

    ];
}
