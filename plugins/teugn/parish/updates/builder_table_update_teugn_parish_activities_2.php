<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishActivities2 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_activities', function($table)
        {
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->time('start_time');
            $table->time('end_time')->nullable();
            $table->dropColumn('start');
            $table->dropColumn('end');
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_activities', function($table)
        {
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('start_time');
            $table->dropColumn('end_time');
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
        });
    }
}
