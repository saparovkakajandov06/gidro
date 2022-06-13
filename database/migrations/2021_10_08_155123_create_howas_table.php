<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHowasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('howas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('temp');
            $table->string('basys');
            $table->string('cyg');
            $table->string('tizlik');
            $table->unsignedBigInteger('saher_id');
            $table->foreign('saher_id')->references('id')->on('sahers')->onDelete('cascade');
            $table->unsignedBigInteger('hyagday_id');
            $table->foreign('hyagday_id')->references('id')->on('howa_yagdays')->onDelete('cascade');
            $table->unsignedBigInteger('ugur_id');
            $table->foreign('ugur_id')->references('id')->on('ugurs')->onDelete('cascade');
            $table->unsignedBigInteger('ady_id');
            $table->foreign('ady_id')->references('id')->on('welayats')->onDelete('cascade');
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
        Schema::dropIfExists('howas');
    }
}
