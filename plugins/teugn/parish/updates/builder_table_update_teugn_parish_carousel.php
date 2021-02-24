<?php namespace Teugn\Parish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTeugnParishCarousel extends Migration
{
    public function up()
    {
        Schema::table('teugn_parish_carousel', function($table)
        {
            $table->string('details', 191);
            $table->string('headline', 50)->change();
            $table->string('headline_color', 40)->change();
            $table->string('background_color', 40)->change();
        });
    }
    
    public function down()
    {
        Schema::table('teugn_parish_carousel', function($table)
        {
            $table->dropColumn('details');
            $table->string('headline', 191)->change();
            $table->string('headline_color', 191)->change();
            $table->string('background_color', 191)->change();
        });
    }
}
