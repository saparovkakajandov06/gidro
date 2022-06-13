<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('time');
            $table->string('temp');
            $table->string('basys');
            $table->string('cyg');
            $table->string('tizlik');
            $table->string('aht');
            $table->unsignedBigInteger('hyagday_id');
            $table->foreign('hyagday_id')->references('id')->on('howa_yagdays')->onDelete('cascade');
            $table->unsignedBigInteger('ugur_id');
            $table->foreign('ugur_id')->references('id')->on('ugurs')->onDelete('cascade');
            $table->unsignedBigInteger('wel_id');
            $table->foreign('wel_id')->references('id')->on('wels')->onDelete('cascade');
            $table->char('date');
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
        Schema::dropIfExists('caks');
    }
}
