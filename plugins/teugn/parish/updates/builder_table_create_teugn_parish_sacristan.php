<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishSacristan extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_sacristan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('location');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_sacristan');
    }
}
