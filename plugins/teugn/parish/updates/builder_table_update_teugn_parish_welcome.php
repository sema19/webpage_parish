<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishWelcome extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_welcome', function($table)
        {
            $table->string('picture', 250)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_welcome', function($table)
        {
            $table->binary('picture')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
