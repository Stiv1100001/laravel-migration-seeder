<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->date("giorno_di_partenza")->after('stazione_di_arrivo');
            $table->boolean('cancellato')->default(false)->change();
            $table->boolean('in_orario')->default(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn(['giorno_di_partenza']);
            $table->tinyInteger('cancellato')->default(0)->change();
            $table->tinyInteger('in_orario')->default(1)->change();
        });
    }
}
