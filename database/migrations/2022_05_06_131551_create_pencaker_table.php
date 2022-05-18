<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencaker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('no_penduduk', 16);
            $table->string('nm_pencaker', 100);
            $table->string('tempat', 50);
            $table->date('tgl_lahir');
            $table->foreignId('kelurahan_id')
                ->constrained('kelurahan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('jenkel', 20);
            $table->string('status', 15);
            $table->string('agama', 20);
            $table->text('alamat');
            $table->string('foto', 100);
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
        Schema::dropIfExists('pencaker');
    }
}
