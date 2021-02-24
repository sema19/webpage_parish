<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishMinis2 extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_minis', function($table)
        {
            $table->string('lastname', 100)->nullable()->change();
            $table->string('firstname', 100)->nullable()->change();
            $table->string('displayname', 100)->nullable()->change();
            $table->string('status', 50)->nullable()->default(null)->change();
            $table->string('location', 100)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_minis', function($table)
        {
            $table->string('lastname', 100)->nullable(false)->change();
            $table->string('firstname', 100)->nullable(false)->change();
            $table->string('displayname', 100)->nullable(false)->change();
            $table->string('status', 50)->nullable(false)->default('regular')->change();
            $table->string('location', 100)->nullable(false)->change();
        });
    }
}
