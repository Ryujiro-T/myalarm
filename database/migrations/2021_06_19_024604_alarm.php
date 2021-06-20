<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alarm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alarm_title');
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
            $table->string('sound_path')->nullable();
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
        Schema::dropIfExists('alarm');
    }
}
