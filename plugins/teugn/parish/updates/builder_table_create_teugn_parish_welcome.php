<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishWelcome extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_welcome', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('headline', 50)->nullable();
            $table->text('text')->nullable();
            $table->binary('picture')->nullable();
            $table->string('link', 250)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_welcome');
    }
}
