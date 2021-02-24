<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishLiturgicalCalendar extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_liturgical_calendar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('date');
            $table->string('liturgy', 250)->nullable();
            $table->string('rank', 50)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('first_reading', 200)->nullable();
            $table->string('response_psalm', 200)->nullable();
            $table->string('sedond_reading', 200)->nullable();
            $table->string('gospel', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_liturgical_calendar');
    }
}
