<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishMinis extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_minis', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_minis', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
