<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishMinis extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_minis', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('displayname', 100);
            $table->string('status', 50)->default('regular');
            $table->string('location', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_minis');
    }
}
