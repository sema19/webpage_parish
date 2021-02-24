<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishMinisLink5 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_minis_link', function($table)
        {
            $table->dropPrimary(['activity_id','ministrant_id']);
            $table->renameColumn('ministrant_id', 'minis_id');
            $table->primary(['activity_id','minis_id']);
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_minis_link', function($table)
        {
            $table->dropPrimary(['activity_id','minis_id']);
            $table->renameColumn('minis_id', 'ministrant_id');
            $table->primary(['activity_id','ministrant_id']);
        });
    }
}
