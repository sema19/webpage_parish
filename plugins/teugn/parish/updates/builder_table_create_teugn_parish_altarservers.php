<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishAltarservers extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_altarservers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 200);
            $table->string('location', 50);
            $table->string('status', 50);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_altarservers');
    }
}
