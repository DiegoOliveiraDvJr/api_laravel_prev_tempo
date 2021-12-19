<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLegendaIdToPrevisoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('previsoes', function (Blueprint $table) {

            $table->foreignId('legenda_id')->constrained('legendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('previsoes', function (Blueprint $table) {
            $table->foreignId('legenda_id')->constrained('legendas')->onDelete('cascade');
        });
    }
}
