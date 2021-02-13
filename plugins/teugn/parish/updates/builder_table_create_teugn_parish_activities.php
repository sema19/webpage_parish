<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishActivities extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_activities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->string('type', 50);
            $table->string('info', 200)->nullable();
            $table->text('detail')->nullable();
            $table->string('status', 40)->nullable()->default('normal');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_activities');
    }
}
