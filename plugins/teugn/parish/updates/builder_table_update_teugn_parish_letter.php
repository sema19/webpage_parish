<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishLetter extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_letter', function($table)
        {
            $table->string('filename');
            $table->dropColumn('file');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_letter', function($table)
        {
            $table->dropColumn('filename');
            $table->string('file', 191);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
