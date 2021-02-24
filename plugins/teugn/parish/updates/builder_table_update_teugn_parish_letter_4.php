<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishLetter4 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_letter', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('release_at')->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_letter', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dateTime('release_at')->nullable()->default('NULL')->change();
        });
    }
}
