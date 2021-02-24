<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishActivities3 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_activities', function($table)
        {
            $table->renameColumn('detail', 'details');
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_activities', function($table)
        {
            $table->renameColumn('details', 'detail');
        });
    }
}
