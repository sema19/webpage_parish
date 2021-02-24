<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishActivitySacristanLink extends Migration
{
    public function up()
    {
        Schema::rename('teugn_parish_activity_sacristan_link', 'teugn_parish_activity_sacristan_link');
        Schema::table('teugn_parish_activity_sacristan_link', function($table)
        {
            $table->renameColumn('sacristan_id', 'sacristan_id');
        });
    }

    public function down()
    {
        Schema::rename('teugn_parish_activity_sacristan_link', 'teugn_parish_activity_sacristan_link');
        Schema::table('teugn_parish_activity_sacristan_link', function($table)
        {
            $table->renameColumn('sacristan_id', 'sacristan_id');
        });
    }
}
