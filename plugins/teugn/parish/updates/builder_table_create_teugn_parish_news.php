<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTeugnParishNews extends Migration
{
    public function up()
    {
        Schema::create('teugn_parish_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('headline', 200);
            $table->text('message')->nullable();
            $table->string('link', 400)->nullable();
            $table->string('type', 50);
            $table->date('expires_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('teugn_parish_news');
    }
}
