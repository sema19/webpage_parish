<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishCommunionhelpers extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_communionhelpers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_communionhelpers');
    }
}
