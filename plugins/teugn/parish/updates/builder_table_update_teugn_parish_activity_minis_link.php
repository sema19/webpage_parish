<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishActivityMinisLink extends Migration
{
    public function up()
    {
        Schema::rename('teugn_parish_minis_link', 'teugn_parish_activity_minis_link');
    }
    
    public function down()
    {
        Schema::rename('teugn_parish_activity_minis_link', 'teugn_parish_minis_link');
    }
}
