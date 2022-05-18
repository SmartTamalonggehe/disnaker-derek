<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuKuningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_kuning', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pencaker_id')
                ->constrained('pencaker')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('kd_kartu', 16);
            $table->integer('no');
            $table->date('tgl');
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
        Schema::dropIfExists('kartu_kuning');
    }
}
