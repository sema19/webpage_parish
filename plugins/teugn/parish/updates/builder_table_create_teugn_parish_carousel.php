<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishCarousel extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_carousel', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('picture')->nullable();
            $table->string('headline')->nullable();
            $table->string('headline_color')->nullable();
            $table->string('background_color')->nullable();
            $table->string('link')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_carousel');
    }
}
