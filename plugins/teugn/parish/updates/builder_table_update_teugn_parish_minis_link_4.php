<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishMinisLink4 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_minis_link', function($table)
        {
            $table->dropPrimary(['activity_id']);
            $table->primary(['activity_id','ministrant_id']);
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_minis_link', function($table)
        {
            $table->dropPrimary(['activity_id','ministrant_id']);
            $table->primary(['activity_id']);
        });
    }
}
