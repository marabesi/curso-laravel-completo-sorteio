<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaConvite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_convite', function (Blueprint $table) {
            $table->integer('id_de');
            $table->integer('id_para');
            $table->foreign('id_de', 'id_de')->references('id')->on('tb_de');
            $table->foreign('id_para', 'id_para')->references('id')->on('tb_para');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_convite');
    }
}
