<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishLiturgicalCalendar extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_liturgical_calendar', function($table)
        {
            $table->string('info', 200)->nullable();
            $table->text('details')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_liturgical_calendar', function($table)
        {
            $table->dropColumn('info');
            $table->dropColumn('details');
        });
    }
}
