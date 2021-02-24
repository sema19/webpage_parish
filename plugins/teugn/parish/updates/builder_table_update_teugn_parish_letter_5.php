<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishLetter5 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_letter', function($table)
        {
            $table->dateTime('release_at')->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_letter', function($table)
        {
            $table->dateTime('release_at')->nullable(false)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
