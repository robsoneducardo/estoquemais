<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos', function (Blueprint $table) {
            $table->id();
            $table->date("data");
            $table->enum("tipo", ["entrada", "saída"]);
            $table->float("quantidade",7, 2);
            $table->float("vl_unit", 7, 2);
            $table->unsignedBigInteger('produto_id')->unsigned();

            $table->foreign('produto_id')
            ->references('id')->on('produtos')
            ->onDelete('cascade');

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
        Schema::dropIfExists('movimentos');
    }
}
