<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishCommunionhelpers extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_communionhelpers', function($table)
        {
            $table->string('name', 100)->change();
            $table->string('location', 100)->change();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_communionhelpers', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('location', 191)->change();
        });
    }
}
