<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishActivities4 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_activities', function($table)
        {
            $table->string('location', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_activities', function($table)
        {
            $table->dropColumn('location');
        });
    }
}
