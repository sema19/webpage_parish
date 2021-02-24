<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishLetter extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_letter', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('release_at');
            $table->string('file');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_letter');
    }
}
