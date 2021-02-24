<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishMinisLink extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_minis_link', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('activity_id');
            $table->integer('mini_id');
            $table->primary(['activity_id','mini_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_minis_link');
    }
}
