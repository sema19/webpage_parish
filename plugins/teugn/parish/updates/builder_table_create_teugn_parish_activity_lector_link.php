<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishActivityLectorLink extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_activity_lector_link', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('activity_id');
            $table->integer('lector_id');
            $table->primary(['activity_id','lector_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_activity_lector_link');
    }
}
