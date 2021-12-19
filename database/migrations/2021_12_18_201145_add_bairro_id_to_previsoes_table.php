<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBairroIdToPrevisoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('previsoes', function (Blueprint $table) {
            $table->foreignId('bairro_id')->constrained('bairros');

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
            $table->foreignId('bairro_id')->constrained('bairros')->onDelete('cascade');
        });
    }
}
