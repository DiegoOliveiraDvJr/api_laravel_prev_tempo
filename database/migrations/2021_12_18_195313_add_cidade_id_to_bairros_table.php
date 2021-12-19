<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCityIdToBairrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bairros', function (Blueprint $table) {
            $table->foreignId('cidade_id')->constrained('cidades');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bairros', function (Blueprint $table) {
            $table->foreignId('cidade_id')->constrained('cidades')->onDelete('cascade');
        });
    }
}
